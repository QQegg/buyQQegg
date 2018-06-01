<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Coupon extends Model
{
    protected $fillable=[
        'id',
        'Store_id',
        'User_id',
        'Coupon_id',
        'use_status'
    ];

    protected $table="user_coupons";
}
