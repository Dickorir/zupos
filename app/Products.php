<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable = ['name','slug','image','category_id','description'];

    public function category(){
        return $this->hasOne('App\Category','id','category_id');
    }
}
