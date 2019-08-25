<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_date',
        'ship_date',
        'ship_amount',
        'phone_receiver',
        'ship_address',
        'billing_address',
        'status',
    ];

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function order_details() {
        return $this->hasMany('App\OrderDetail');
    }
}
