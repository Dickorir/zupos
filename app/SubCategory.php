<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $fillable = ['name','slug','category_id','image','description'];

    public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }

    public function product(){
        return $this->hasOne('App\Products','sub_category_id','id');
    }
}
