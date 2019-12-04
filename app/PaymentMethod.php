<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class PaymentMethod extends Model
{
    //
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    protected $table = 'payment_methods';

    public function Payments() {
        return $this->hasMany('App\Payment');
    }
}
