<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        //relation avec un pivot, relation n n, va direct dans la table order_products
        return $this->belongsToMany('App\Product')->withPivot('quantity', 'price');
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
