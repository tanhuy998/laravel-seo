<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class PaymentMethod extends Model
{
    //
    protected $table = 'payment_methods';

    public function Payments() {
        return $this->hasMany('App\Payment');
    }
}
