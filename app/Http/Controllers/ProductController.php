<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }
    
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop-detail', compact('product'));
    }
    
    public function byCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();
        return view('product', compact('products', 'category'));
    }
}