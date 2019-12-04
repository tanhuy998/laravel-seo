<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    protected $table = 'product_images';
}
