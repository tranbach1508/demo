<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public function categories()
    {
        return $this->belongsToMany('App\Categories','pro_cate','cate_id','pro_id');
    }
}
