<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable = ['name','slug','image','category_id','sub_category_id','description','price','quantity','re_order_level'];

    public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }

    public function subcategory(){
        return $this->hasOne('App\SubCategory','id','sub_category_id');
    }
}
