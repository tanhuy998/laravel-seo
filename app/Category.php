<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    public function Products() {
        return $this->hasMany('App\Product');
    }
}
