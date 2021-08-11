<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property $id
 * @property $credit
 * @property $debit
 * @property $prev_bal
 * @property $customer_id
 * @property $customer_transactions_log_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaction extends Model
{
    
    static $rules = [
		'credit' => 'required',
		'debit' => 'required',
		'prev_bal' => 'required',
		'customer_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['credit','debit','prev_bal','customer_id','customer_transactions_log_id'];



}
