<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    public function products()
    {
        return $this->belongsToMany('App\Products','pro_cate','cate_id','pro_id');
    }
}
