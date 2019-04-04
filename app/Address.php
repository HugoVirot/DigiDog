<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function ordersDelivery()
    {
        return $this->hasMany('App\User', 'address_delivery_id');
    }

    public function ordersBilling()
    {
        return $this->hasMany('App\User', 'address_billing_id');
    }
}