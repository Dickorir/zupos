<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItems extends Model
{
    public $fillable = ['product_id','title','slug','price','quantity','re_order_level'];
}
