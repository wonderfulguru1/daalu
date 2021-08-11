<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Store
 *
 * @property $id
 * @property $merchant_id
 * @property $store_name
 * @property $store_type_id
 * @property $website
 * @property $image
 * @property $address
 * @property $state_id
 * @property $city_id
 * @property $zip
 * @property $contact_person_firstname
 * @property $contact_person_lastname
 * @property $job_title
 * @property $contact_email
 * @property $user_id
 * @property $mobile_no
 * @property $mobile_no2
 * @property $status_id
 * @property $daalu_commision
 * @property $commission_payout_mode_id
 * @property $daalu_profit
 * @property $daalu_constant
 * @property $customers_earnings
 * @property $timeinterval_id
 * @property $payout_amount_id
 * @property $store_threshold
 * @property $daalu_threshold
 * @property $store_setting_id
 * @property $settings_type
 * @property $payment_id
 * @property $created
 * @property $modified
 * @property $active
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Store extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'settings_type' => 'required',
		'payment_id' => 'required',
		'active' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['merchant_id','store_name','store_type_id','website','image','address','state_id','city_id','zip','contact_person_firstname','contact_person_lastname','job_title','contact_email','user_id','mobile_no','mobile_no2','status_id','daalu_commision','commission_payout_mode_id','daalu_profit','daalu_constant','customers_earnings','timeinterval_id','payout_amount_id','store_threshold','daalu_threshold','store_setting_id','settings_type','payment_id','created','modified','active'];

       public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }


       public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id', 'id');
    }



}
