<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function Products() {
        return $this->belongsToMany('App\Product','ordered_products','order_id','product_id');
    }
}
