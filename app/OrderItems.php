<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    public $fillable = ['order_id','product_items_id','quantity','quantity','price','sub_total_price'];

    public function order(){
        return $this->hasOne('App\Orders','id','order_id');
    }

    public function product(){
        return $this->hasOne('App\Products','id','product_items_id');
    }
}
