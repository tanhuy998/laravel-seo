<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function Products() {
        return $this->belongsToMany('App\Product','ordered_products','order_id','product_id');
    }

    public function OrderedProducts() {
        return $this->hasMany('App\OrderedProduct');
    }

    public function Payment() {
        return $this->hasOne('App\Payment');
    }
}
