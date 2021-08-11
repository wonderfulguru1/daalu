<?php

use App\User;
use App\Models\Faq;
use App\Models\Theme;
use App\Models\Customer;
use App\Models\Settings;
use App\Models\TransStat;
use App\Models\FaqCategory;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerTransactionsLog;



if (!function_exists('getCustomerStats')) {
    /**
     * @param int   $statusId    
     */
    function getCustomerStats($statusId = null)
    {   

        $customers = DB::table('customers');
        if($statusId){
            $customers =  $customers->where(['status_id'=>$statusId]);
        } 
        $customers =  $customers->count();
        return $customers;
    }
}



if (!function_exists('getMerchantStats')) {
    /**
     * @param int   $statusId    
     */
    function getMerchantStats($statusId = null)
    {   

        $merchants = DB::table('merchants');
        if($statusId){
            $merchants =  $merchants->where(['status_id'=>$statusId]);
        } 
        $merchants =  $merchants->count();
        return $merchants;
    }
}


if (!function_exists('getStoresStats')) {
    /**
     * @param int   $statusId    
     */
    function getStoresStats($statusId = null)
    {   

        $stores = DB::table('stores');
        if($statusId){
            $stores =  $stores->where(['status_id'=>$statusId]);
        } 
        $stores =  $stores->count();
        return $stores;
    }
}



if (!function_exists('getTransactions')) {
    /**
     * @param int   $statusId    
     */
    function getTransactions($merchantId = null, $transactionType=null, $status=null)
    {   

        $customerTransactionsLog = DB::table('customer_transactions_log');

        if($merchantId){
            $customerTransactionsLog =  $customerTransactionsLog->where(['merchant_id'=>$merchantId]);
        } 

        if($transactionType){
            $customerTransactionsLog =  $customerTransactionsLog->where(['transaction'=>$transactionType]);
        } 

        if($status){
            $customerTransactionsLog =  $customerTransactionsLog->where(['status_id'=>$status]);
        }
        $customerTransactionsLog =  $customerTransactionsLog->count();
        return $customerTransactionsLog;
    }
}


if (!function_exists('get10LastTransactions')) {
    /**
     * @param int   $statusId    
     */
    function get10LastTransactions($merchantId = null, $transactionType=null, $status=null)
    {   

        $customerTransactionsLog = CustomerTransactionsLog::orderBy('id', 'DESC');

        if($merchantId){
            $customerTransactionsLog =  $customerTransactionsLog->where(['merchant_id'=>$merchantId]);
        } 

        if($transactionType){
            $customerTransactionsLog =  $customerTransactionsLog->where(['transaction'=>$transactionType]);
        } 

        $customerTransactionsLog =  $customerTransactionsLog->skip(0)->take(10)->get();
        return $customerTransactionsLog;
    }
}

if (!function_exists('earnpointsOffline')) {
    /**
     * @param array   $requestData    
     */
    function earnpointsOffline($requestData)
    {   
      
		$data = [];  
        $response = [];  
        if ($requestData->phone_no) {
            
            $store_setting_data = User::Where(['username' =>$requestData->store_id ])->first();
           
            // customer details
            $customer = Customer::Where(['username'=>$requestData->phone_no ])->first();        

            if ($customer) {
                if ($customer->status_id != 5) {
                    if ($store_setting_data && $customer && ($requestData->amount >= 500)) {
                        $store_setting_data['amount'] = $requestData->amount;
                        // calculating point
                        $points_received = pointEngine($store_setting_data, $requestData->amount);                       
                        $daalu_commision = commission($store_setting_data, $requestData->amount);

                        $data['CustomerTransactionsLog']['ref'] = 'pos';
                        $data['CustomerTransactionsLog']['receipt'] = $requestData->receipt;
                        $data['CustomerTransactionsLog']['ref_id'] = '1';
                        $data['CustomerTransactionsLog']['customer_id'] = $customer->id;
                        $data['CustomerTransactionsLog']['card_no'] = $customer->username;
                        $data['CustomerTransactionsLog']['mobile_no'] = $customer->username;
                        $data['CustomerTransactionsLog']['transaction_code'] = $requestData->receipt . "-" . time();
                        $data['CustomerTransactionsLog']['creds'] = $points_received;
                        $data['CustomerTransactionsLog']['time'] = time() + 3600;
                        $data['CustomerTransactionsLog']['ctype'] = 'offline';
                        $data['CustomerTransactionsLog']['amount_spent'] = $requestData->amount;
                        $data['CustomerTransactionsLog']['commission'] = $daalu_commision;
                        $data['CustomerTransactionsLog']['transaction'] = 'earn';
                        $data['CustomerTransactionsLog']['merchant_id'] = $store_setting_data->merchant_id;
                        $data['CustomerTransactionsLog']['store_id'] = $store_setting_data->id;
                        $data['CustomerTransactionsLog']['status_id'] = 3;
                        $data['CustomerTransactionsLog']['pstatus_id'] = 1;
                        $data['CustomerTransactionsLog']['entry'] = 'Points accumulated from ' . $store_setting_data->merchant->merchant_name . ' (Amount spent: ' . $requestData->amount . ')';
                    
                        try {
                            $CustomerTransactionsLog =  new CustomerTransactionsLog;
                            $lastTransactionId = $CustomerTransactionsLog->create($data['CustomerTransactionsLog']);
                            if ($lastTransactionId ) {
                            
                                 $transaction_data = TransStat::where(['customer_id' =>  $customer->id])->first();
                                 if ($transaction_data) {                                    
                                    $data['Transaction']['customer_id'] = $customer->id;
                                    $data['Transaction']['prev_bal'] = $transaction_data->customer_balance+ $points_received;
                                    $data['Transaction']['credit'] = $points_received;
                                    $data['Transaction']['customer_transactions_log_id'] = $lastTransactionId->id;
                                    $transactionStats =  new Transaction;
                                    $transactionStats->create($data['Transaction']);
                                }
                                //computing stats
                                $balance = $transaction_data->customer_balance + $points_received;
                                $data['TransStat']['customer_id'] = $customer->id;
                                $data['TransStat']['earn_point'] = $transaction_data->earn_point + $points_received;
                                $data['TransStat']['earn_amount'] = $transaction_data->earn_amount + $requestData->amount;
                                $data['TransStat']['total'] = $transaction_data->total + $requestData->amount;
                                $data['TransStat']['total_transaction'] = $transaction_data->total_transaction + 1;
                                $data['TransStat']['customer_balance'] = $balance;
                                TransStat::where('id', $transaction_data->id )->update($data['TransStat']);
                               // TransStat::update($data['TransStat']);
                           
                                }

                                $response['status'] = 'success';
                                $response['points_burned'] = 0;
                                $response['points_earned'] = $points_received;
                                $response['customer'] = $customer->first_name . ' ' . $customer->last_name;
                                $response['card'] = $customer->card->card;
                                $response['receipt'] = $data['CustomerTransactionsLog']['receipt'];
                                $response['transaction_code'] = (strlen(strpos($data['CustomerTransactionsLog']['transaction_code'], "dtcode")) == 0) ? $data['CustomerTransactionsLog']['transaction_code'] : '';
                                $response['balance'] = $data['TransStat']['customer_balance'];
                            
                        } catch (exception $ex) {                          
                            $response['error'] = 'This transaction id already exist please use another one';
                            $response['status'] = 'failed';
                        }
                    } else {
                        $response['error'] = 'Invalid trasaction you must spend at least 1000 to earn points';
                        $response['status'] = 'failed';

                        if (!$store_setting_data) {
                            $response['error'] = 'Invalid Merchant credentials';
                        }

                        if (!$customer) {
                            $response['error'] = 'Invalid customer credentials';
                        }
                        $response = $response;
                    }
                } else {
                    $response['error'] = 'This account has been suspended';
                    $response['status'] = 'failed';
                    $response = $response;
                }
            } else {
                $response['error'] = 'Invalid customer credentials';
                $response['status'] = 'failed';
                $response = $response;
            }
        } 
        return $response;
    }
}



if (!function_exists('burnPointsOffline')) {
    /**
     * @param array   $requestData    
     */
    function burnPointsOffline($requestData)
    {         
		$data = [];  
        $response = [];  
        if ($requestData->phone_no) {
            
            $store_setting_data = User::Where(['username' =>$requestData->store_id ])->first();
           
            // customer details
            $customer = Customer::Where(['username'=>$requestData->phone_no ])->first();        
            $transaction_data = TransStat::where(['customer_id' =>  $customer->id])->first();
            $points_to_burn = pointEngine($store_setting_data, $requestData->amount , 'burn');                       
            $daalu_commision = commission($store_setting_data, $requestData->amount);
            if ($customer) {
                if ($customer->status_id != 5) {
                    if ($transaction_data->customer_balance >=$points_to_burn && $transaction_data->customer_balance >= 1000) {
                        $store_setting_data['amount'] = $requestData->amount;
                        // calculating point                      

                        $data['CustomerTransactionsLog']['ref'] = 'pos';
                        $data['CustomerTransactionsLog']['receipt'] = $requestData->receipt;
                        $data['CustomerTransactionsLog']['ref_id'] = '1';
                        $data['CustomerTransactionsLog']['customer_id'] = $customer->id;
                        $data['CustomerTransactionsLog']['card_no'] = $customer->username;
                        $data['CustomerTransactionsLog']['mobile_no'] = $customer->username;
                        $data['CustomerTransactionsLog']['transaction_code'] = $requestData->receipt . "-" . time();
                        $data['CustomerTransactionsLog']['creds'] = $points_to_burn;
                        $data['CustomerTransactionsLog']['time'] = time() + 3600;
                        $data['CustomerTransactionsLog']['ctype'] = 'offline';
                        $data['CustomerTransactionsLog']['amount_spent'] = $requestData->amount;
                        $data['CustomerTransactionsLog']['commission'] = $daalu_commision;
                        $data['CustomerTransactionsLog']['transaction'] = 'burn';
                        $data['CustomerTransactionsLog']['merchant_id'] = $store_setting_data->merchant_id;
                        $data['CustomerTransactionsLog']['store_id'] = $store_setting_data->id;
                        $data['CustomerTransactionsLog']['status_id'] = 4;
                        $data['CustomerTransactionsLog']['pstatus_id'] = 1;
                        $data['CustomerTransactionsLog']['entry'] = 'Amount spent' . $store_setting_data->merchant->merchant_name . ' (Amount spent: ' . $requestData->amount . ')';
                    
                        try {
                            $CustomerTransactionsLog =  new CustomerTransactionsLog;
                            $lastTransactionId = $CustomerTransactionsLog->create($data['CustomerTransactionsLog']);
                            if ($lastTransactionId ) {                           
                                 
                                 if ($transaction_data) {                                    
                                    $data['Transaction']['customer_id'] = $customer->id;
                                    $data['Transaction']['prev_bal'] = $transaction_data->customer_balance - $points_to_burn;
                                    $data['Transaction']['credit'] = $points_to_burn;
                                    $data['Transaction']['customer_transactions_log_id'] = $lastTransactionId->id;
                                    $transactionStats =  new Transaction;
                                    $transactionStats->create($data['Transaction']);
                                }
                                //computing stats
                                $balance = $transaction_data->customer_balance - $points_to_burn;
                                $data['TransStat']['customer_id'] = $customer->id;
                                $data['TransStat']['burn_point'] = $transaction_data->earn_point + $points_to_burn;
                                $data['TransStat']['burn_amount'] = $transaction_data->earn_amount + $requestData->amount;
                                $data['TransStat']['total'] = $transaction_data->total + $requestData->amount;
                                $data['TransStat']['total_transaction'] = $transaction_data->total_transaction + 1;
                                $data['TransStat']['customer_balance'] = $balance;
                                TransStat::where('id', $transaction_data->id )->update($data['TransStat']);
                                }

                                $response['status'] = 'success';
                                $response['points_burned'] = $points_to_burn;
                                $response['points_earned'] = 0;
                                $response['customer'] = $customer->first_name . ' ' . $customer->last_name;
                                $response['card'] = $customer->card->card;
                                $response['receipt'] = $data['CustomerTransactionsLog']['receipt'];
                                $response['transaction_code'] = (strlen(strpos($data['CustomerTransactionsLog']['transaction_code'], "dtcode")) == 0) ? $data['CustomerTransactionsLog']['transaction_code'] : '';
                                $response['balance'] = $data['TransStat']['customer_balance'];
                            
                        } catch (exception $ex) {  
                            dump($ex);                         
                            $response['error'] = 'This transaction id already exist please use another one';
                            $response['status'] = 'failed';
                        }
                    } else {
                        $response['error'] = 'Insuficient funds';
                        $response['status'] = 'failed';

                        if (!$store_setting_data) {
                            $response['error'] = 'Invalid Merchant credentials';
                        }

                        if (!$customer) {
                            $response['error'] = 'Invalid customer credentials';
                        }
                        $response = $response;
                    }
                } else {
                    $response['error'] = 'This account has been suspended';
                    $response['status'] = 'failed';
                    $response = $response;
                }
            } else {
                $response['error'] = 'Invalid customer credentials';
                $response['status'] = 'failed';
                $response = $response;
            }
        } 
        return $response;
    }
}

if (!function_exists('checkBalance')) {
    /**
    * @param array   $requestData    
    */
   function checkBalance($requestData)
   {  
        $customer = Customer::Where(['username'=>$requestData->phone_no ])->first(); 
        $response = [];
        if ($customer) {   
            if ($customer->transStat) {
                $response['status'] = 'success';
                $response['balance'] =  $customer->transStat->customer_balance;
                $response['customer'] = $customer->first_name . ' ' . $customer->last_name;
                $response['card'] = $customer->card->card;
            } else {
                $response['status'] = 'success';
                $response['balance'] = 0;
                $response['customer'] = $customer->first_name . ' ' . $customer->last_name;
                $response['card'] =  $customer->card->card;
            }
        } else {
            $response['error'] = 'Invalid customer credentials';
            $response['status'] = 'failed';
            $response = $response;
        }  
        return $response;      
    }    
} 

if (!function_exists('pointEngine')) {
    /**
    * @param array   $requestData    
    */
   function pointEngine($store_setting_data, $amount_spent, $transaction=null)
   {  
    $settings =  Settings::first(); 
    $commision = $store_setting_data->store->daalu_commision/100;
    $customer_earnings = ($store_setting_data->store->customers_earnings/100);
    $engine_constant = $settings->daalu_constant;
    $point = ($transaction == 'burn')? ($engine_constant* $amount_spent) : ($commision* $amount_spent * $customer_earnings  * $engine_constant);
    return $point;
   }
} 

if (!function_exists('commission')) {
    /**
    * @param array   $store_setting_data    
    */
   function commission($store_setting_data, $amount_spent)
   {  
    $commision = $store_setting_data->Store->daalu_commision/100;
    $commision = $commision* $amount_spent;
    return $commision;
   }
} 

if (!function_exists('cardGenerator')) {
    /**
    * @param array   $requestData    
    */
   function cardGenerator($store_setting_data)
   {  
    $this->loadModel('Card');
    $last_card =$this->Card->find('first', 
            array(
                'fields'=>array('Card.card'),
                'order' => array('Card.id' => 'DESC')
    )); 
    return $last_card = $last_card['Card']['card'] + 1;
   }
} 

if (!function_exists('getTitle')) {
    /**
     * @param null   $title
     * @param string $separator
     *
     * @return string
     */
    function getTitle($title = null, $separator = ' | ')
    {
        if (is_string($title)) {
            $title .= $separator .  config('settings.site_title');
        } else {
            $title = config('settings.site_title');
        }
        return strip_tags($title);
    }
}

if (!function_exists('theme')) {
    function theme($fileName)
    {
            return  "backend" . '.' .'pages.'. $fileName;
    }
}

if (!function_exists('themeLayout')) {
    function themeLayout($fileName)
    {
            return  "backend." .$fileName;
    }
}

if (!function_exists('widgetContent')) {
    /**
     * @param int   $pageId
     * @param int $widgetId
     *
     * @return widgetContent
     */
    function getwidgetContent($pageId, $widgetId)
    {        
        return DB::table('page_widget')->where([
            'page_id'=>$pageId,
            'widget_id'=>$widgetId,
        ])->first();
    }
}

if (!function_exists('faqs')) {
    /**
     * @param int   $pageId
     * @param int $widgetId
     *
     * @return widgetContent
     */
    function getFaqs()
    {    
        $faqObj = [
            'faqTags' => FaqCategory::all(),
            'faqs' => Faq::all()
        ];      
        return $faqObj;
    }
}




if (!function_exists('getDescription')) {
    /**
     * Render nodes for nested sets
     *
     * @param mixed $description
     *
     * @return string
     */
    function getDescription($description = null)
    {
        if (!is_string($description)) {
            $description = config('settings.site_description');
        }
        return strip_tags($description);
    }
}

if (!function_exists('getImage')) {
    /**
     * Return Image
     *
     * @param mixed  $object
     * @param string $property
     *
     * @return string
     */
    function getImage($object = null, $property = 'logo')
    {
        if (is_object($object) && isset($object->$property)) {
            return asset($object->$property);
        }
        return is_string($object) ? $object : asset('i/icons/android-chrome-512x512.png');
    }
}

if (!function_exists('getNWords')) {
    /**
     * Limit content with number of words
     *
     * @param string $string
     * @param int    $n
     * @param bool   $withDots
     *
     * @return string
     */
    function getNWords($string, $n = 5, $withDots = true)
    {
        $excerpt = explode(' ', strip_tags($string), $n + 1);
        $wordCount = count($excerpt);
        if ($wordCount >= $n) {
            array_pop($excerpt);
        }
        $excerpt = implode(' ', $excerpt);
        if ($withDots && $wordCount >= $n) {
            $excerpt .= '...';
        }
        return $excerpt;
    }
}

if (!function_exists('getFacebookShareLink')) {
    /**
     * Get Facebook share link
     *
     * @param $url
     * @param $title
     *
     * @return string
     */
    function getFacebookShareLink($url, $title)
    {
        return 'https://www.facebook.com/sharer/sharer.php?u=' . $url .'&t=' . rawurlencode($title);
    }
}

if (!function_exists('getTwitterShareLink')) {
    /**
     * Get Twitter share link
     *
     * @param $url
     * @param $title
     *
     * @return string
     */
    function getTwitterShareLink($url, $title)
    {
        return 'https://twitter.com/intent/tweet?text=' . rawurlencode(implode(' ', [$title, $url]));
    }
}

if (!function_exists('getRobots')) {
    /**
     * @return string
     */
    function getRobots()
    {
        if (request()->get('PageSpeed')) {
            return 'noindex,nofollow';
        }
        return 'index,follow';
    }
}

if (!function_exists('getMenu')) {
    /**
     * @return mixed
     * @throws \Exception
     */
    function getMenu()
    {
        return cache()->remember('menu', 60, function () {
            return \App\Models\Page::where('parent_id', null)
            ->where('slug','<>', 'home')
            ->where('slug','<>', 'faq')
            ->where('slug','<>', 'nigeriamrs-mobile-app')
            ->with('children')->get();
        });
    }
}

if (!function_exists('getFooterArticles')) {
    /**
     * @param int $limit
     *
     * @return mixed
     * @throws \Exception
     */
    function getFooterArticles($limit = 3)
    {
        return cache()->remember('footer_articles', 60, function () use ($limit) {
            return \App\Models\Article::published()->limit($limit)->get();
        });
    }
}

if (!function_exists('active')) {
    /**
     * @param object $object
     * @param string $property
     *
     * @return string
     */
    function active($object, $property = 'slug')
    {
        return strpos(request()->url(), $object->$property) !== false ? 'is-active' : '';
    }
}

if (!function_exists('icon')) {
    /**
     * @param string $icon
     * @param null   $class
     *
     * @return string
     */
    function icon($icon, $class = null)
    {
        if ($class === null) {
            return '<i data-feather="' . $icon . '"></i>';
        }
        return '<i class="' . $class . '" data-feather="' . $icon . '"></i>';
    }
}
