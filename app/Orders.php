<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $fillable = ['order_number','waiter_id','customer_id','table_id','discount','total_price','paid','order_by'];
}
