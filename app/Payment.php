<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillable = ['invoice_no','order_id','order_number','discount','total_pay','balance','payment_mode','code','received_by','amount_received','change'];

    public function cashier(){
        return $this->hasOne('App\User','id','received_by');
    }

    public function order(){
        return $this->hasOne('App\Orders','id','order_id');
    }
}
