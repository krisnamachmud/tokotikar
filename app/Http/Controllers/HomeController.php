<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Get categories for carousel
        $categories = Category::all();
        
        // Get products for featured section (limit to 4)
        $products = Product::take(4)->get();
        
        return view('home', compact('categories', 'products',));
    }
    
    public function contact()
    {
        return view('contact');
    }
}