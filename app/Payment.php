<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Payment extends Model
{
    //
    public function Order() {
        return $this->belongsTo('App\Order');
    }

    public function PaymentMethod() {
        return $this->belongsTo('App\Payment');
    }
}
