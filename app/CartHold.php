<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartHold extends Model
{
    public $fillable = ['hold_id','product_id','qty','waiter_id','customer_id','table_no'];

    public function user()
    {
        return $this->hasOne('App\User','id','waiter_id');
    }
}
