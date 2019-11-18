<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function Products() {
        $ordered_product = $this->hasMany('App\OrderedProduct');

        
    }
}
