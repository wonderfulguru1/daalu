<?php

namespace App\Models;


use App\Models\Gender;
use App\Models\Status;
use App\Models\CustomerTransactionsLog;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $company_school
 * @property $spent
 * @property $referee_code
 * @property $referral_code
 * @property $password_isset2
 * @property $fb_id
 * @property $password_isset
 * @property $first_name
 * @property $last_name
 * @property $card_id
 * @property $pin
 * @property $username
 * @property $mobile
 * @property $email
 * @property $password
 * @property $address
 * @property $job_title
 * @property $social_id
 * @property $institution
 * @property $dob
 * @property $gender
 * @property $created
 * @property $modified
 * @property $last_active
 * @property $role_id
 * @property $image
 * @property $image_fb
 * @property $state_id
 * @property $city_id
 * @property $merchant_id
 * @property $store_id
 * @property $status_id
 * @property $gender_id
 * @property $title_id
 * @property $ip
 * @property $deliveroption_id
 * @property $offlinepartner_id
 * @property $employmentstatus_id
 * @property $trans_stat_id
 * @property $passkey
 * @property $sent_mail
 * @property $is_customer
 * @property $is_test
 * @property $remember_token
 * @property $partner_id
 * @property $last_login
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'spent' => 'required',
		'password_isset2' => 'required',
		'password_isset' => 'required',
		'role_id' => 'required',
		'image_fb' => 'required',
		'state_id' => 'required',
		'city_id' => 'required',
		'status_id' => 'required',
		'ip' => 'required',
		'is_customer' => 'required',
		'is_test' => 'required',
		'partner_id' => 'required',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_school','spent','referee_code','referral_code','password_isset2','fb_id','password_isset','first_name','last_name','card_id','pin','username','mobile','email','address','job_title','social_id','institution','dob','gender','created','modified','last_active','role_id','image','image_fb','state_id','city_id','merchant_id','store_id','status_id','gender_id','title_id','ip','deliveroption_id','offlinepartner_id','employmentstatus_id','trans_stat_id','passkey','sent_mail','is_customer','is_test','partner_id','last_login'];


    public function gender()
	{
	    return $this->hasOne(Gender::class, 'id', 'gender_id');
	}

	  public function status()
	{
	    return $this->hasOne(Status::class, 'id', 'status_id');
	}

	public function Card()
	{
	    return $this->hasOne(Card::class, 'id', 'card_id');
	}

	public function transStat()
	{
	    return $this->hasOne(TransStat::class, 'customer_id');
	}

	public function transactionsLog()
	{
	    return $this->hasMany(CustomerTransactionsLog::class, 'customer_id');
	}

}
