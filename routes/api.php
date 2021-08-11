<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/earnpoint-offline', function (Request $request) {  

    $response = [];
    
    $validator = Validator::make($request->all(),  [
    'amount' => 'required|max:255',
    'store_id' => 'required|max:255',
    'store_pass' => 'required',
    'pin' => 'required',
    'phone_no' => 'required',
    'receipt' => 'required',
    ]);
    
    if ($validator->fails()) {
        $response = $validator->messages();
        return response()->json($response, 200);
    }


    $response = earnpointsOffline($request);
    if($response){
        return response()->json($response, 200);
    } 
})->name('earnpoint.offline');


Route::post('/burnpoint-offline', function (Request $request) {  

    $response = [];
    
    $validator = Validator::make($request->all(),  [
    'amount' => 'required|max:255',
    'store_id' => 'required|max:255',
    'store_pass' => 'required',
    'pin' => 'required',
    'phone_no' => 'required',
    'receipt' => 'required',
    ]);
    
    if ($validator->fails()) {
        $response = $validator->messages();
        return response()->json($response, 200);
    }


    $response = burnPointsOffline($request);
    if($response){
        return response()->json($response, 200);
    } 
})->name('burnpoint.offline');

Route::post('/check-balance', function (Request $request) {  

    $response = [];
    
    $validator = Validator::make($request->all(),  [
      'phone_no' => 'required',
    ]);
    
    if ($validator->fails()) {
        $response = $validator->messages();
        return response()->json($response, 200);
    }

    $response = checkBalance($request);
    if($response){
        return response()->json($response, 200);
    } 
})->name('check.balance');


Route::post('/buy-airtime', function (Request $request) {  
    
    $response = [];
    
    $validator = Validator::make($request->all(),  [
    'user_mobile' => 'required|max:255',
    'mobile' => 'required|max:255',
    'network' => 'required',
    'amount' => 'required',
    'wallet' => 'required',
    ]);
    
    if ($validator->fails()) {
        $response['response'] = $validator->messages();
        return response()->json($response, 200);
    }else{
        $url = "http://132.145.231.191/VTUAPI/v4/getCredit";
        $daaluUrl = "http://daalu.com.ng/mydaalu/api/burnpoints_offline";
        $response = "";
        $user_mobile = $request->input('user_mobile');
        $mobile = $request->input('mobile');
        $network = $request->input('network');
        $amount = $request->input('amount');
        $uniqueCode = "Airtim"."-".str_replace('-',"",date('Y-m-d'))."-".time()."-".unique_code(9);
        
        
       $mydata = json_encode(array(
        "username" => "tvioSolutions", "password" => "stuV232n!iI1", "amount" => $amount,
        "msisdn" =>  $mobile, "network" => $network, "requestId" => $uniqueCode ));
         $result1 = json_decode(httpPost($url, $mydata));
       
      
        if($result1->status == "Success"){
            $mydata2 = json_encode(array(
            "store_id" => "buymoreikj", 
            "store_pass" => "wonder", 
            "amount" => $amount,
            "phone_no" =>  $mobile, 
            "pin" => "4a7d1ed414474e4033ac29ccb8653d9b"));
            $result2 = json_decode(httpPost($daaluUrl, $mydata2));
         
            if($result2->success){
                $res = [];
                $user = AppUser::with(['main_wallet'])->Where(['mobile_no'=>$user_mobile,]
                )->first();
                if($user){
                    if($user->status  == 0){
                        AppUser::where(['mobile_no'=> $user_mobile])
                        ->update([
                        'status' =>  1,
                        //'user_id' => $user->id
                        ]);  
                    }
                    
                    $res['success'] = true;
                    $user->external_username = $user_mobile;
                    $res['data'] = $user;
                    $res['message'] = "login success";
                }else{
                    $res['success'] = false;
                    $res['data'] = (object) array();
                    $res['message'] = "invalid user";
                }
                return (new AppUserResource($res))
                ->response()
                ->setStatusCode(Response::HTTP_CREATED);
            }
            $res['success'] = false;
            $res['data'] = null;
            $res['message'] = "Invalid transaction";
            return response()->json($res, 400);
        }
            $res['success'] = false;
            $res['data'] = null;
            $res['message'] = $result1->message ."|".$result1->reason ;
         return response()->json($res, 400);
        
    }

    return response()->json($error, 400);
     

})->name('buy.airtime');


Route::post('/buy-data', function (Request $request) {  
    
    $response = [];
    
    $validator = Validator::make($request->all(),  [
    'mobile' => 'required|max:255',
    'network' => 'required',
    'dataplan' => 'required',
    ]);
    
    if ($validator->fails()) {
        $response['response'] = $validator->messages();
        return response()->json($response, 200);
    }else{
        $mobile = $request->input('mobile');
        $network = $request->input('network');
        $dataplan = $request->input('dataplan');
        $uniqueCode = "Airtim"."-".str_replace('-',"",date('Y-m-d'))."-".time()."-".unique_code(9);

        
        $url = "http://132.145.231.191/V2NData/v4/getData";
        $authStr = "tvioSolutions:v2nVtuTVio0On";
        $authEncoded = base64_encode($authStr);
        $auth = "Basic " . $authEncoded;
        $headers = array('Authorization:' . $auth, 'Accept: application/json',);
        $mydata = json_encode(array("dataplan" => $dataplan, "msisdn" => $mobile, "network" => $network ,"requestId"=>$uniqueCode));
    
        return $result = httpPostWithHeader($url, $mydata, $headers);
    }

    return response()->json($error, 400);

})->name('buy.data');

Route::get('/default-settigs', function (Request $request) { 
$settings = [];   
$rUrl = "https://fillcart.tviodigital.com/jsonfiles/VTUDataList.json";
$data = json_decode(file_get_contents($rUrl), true);
$settings[0]['dataSettings'] = $data;
$settings[1]['otherSettings'] = array();
return $settings;
})->name('default.settigs');



function unique_code($limit)
{
  return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}


function httpPostWithHeader($url, $params, $header) {
 try {
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $response = curl_exec($ch);
 curl_close($ch);
 } catch (Exception $e) {
 $response = $e->getMessage();
 }
 return $response;
}
function httpPost($url, $params) {
    $header = array('Content-Type:application/json', 'Connection: Keep -Alive');
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
    curl_close($ch);
    } catch (Exception $e) {
        $response = $e->getMessage();
    }
        return $response;
}



