<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name','description','slug','image'];

    public function subcategory(){
        return $this->hasOne('App\SubCategory','category_id','id');
    }

    public function product(){
        return $this->hasOne('App\Products','sub_category_id','id');
    }
}
