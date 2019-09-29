<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;

class Pro_cateController extends Controller
{
    public function products($id){
        $products = Products::find($id);
        foreach($products->categories as $value){
            echo $value->name;
            echo '<hr>';
        }
    }
    public function categories($id){
        $categories = Categories::find($id);
        foreach($categories->products as $value){
            echo $value->name;
            echo '<hr>';
        }
    }
}
