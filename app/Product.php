<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    public function Category() {
        return $this->belongsTo('App\Category');
    }

    public function Tags() {
        return $this->hasMany('App\Tag');
    }

    public function Images() {
        return $this->hasMany('App\Image');
    }

}
