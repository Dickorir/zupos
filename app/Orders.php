<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $fillable = ['order_number','waiter_id','customer_id','table_id','discount','balance','total_price','paid','pay_received_by','order_by','kitchen'];

    public function orderitems(){
        return $this->hasMany('App\OrderItems','order_id','id');
    }

    public function table(){
        return $this->hasOne('App\Table','id','table_id');
    }

    public function waiter(){
        return $this->hasOne('App\User','id','waiter_id');
    }
}
