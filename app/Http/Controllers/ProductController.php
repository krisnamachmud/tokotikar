<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }
    
    public function show($slug)
    {
        // Here you can use the $slug parameter to fetch the specific product
        // For now, we're just passing it to the view
        return view('product_detail', ['slug' => $slug]);
    }
}