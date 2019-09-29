<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  Categories::all();
        return response()->json($categories);
    }
}
