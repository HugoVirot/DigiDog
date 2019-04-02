<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function addressDelivery()
    {
        return $this->belongsTo('App\Address', 'address_delivery_id');
    }

    public function addressBilling()
    {
        return $this->belongsTo('App\Address', 'address_billing_id');
    }
}
