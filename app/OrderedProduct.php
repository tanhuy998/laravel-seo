<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class OrderedProduct extends Model
{
    //
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    
    protected $table = 'ordered_products';

    public function Order() {
        return $this->belongsTo('App\Order');
    }

    public function Product() {
        return $this->belongsTo('App\Product');
    }
}
