<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'product_images';

    public function Product() {
        return $this->belongsTo('App\Product');
    }
}
