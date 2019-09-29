<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Products::all();
        return response()->json($product);
    }
}
