<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Promotion;  
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        // Removed is_active filter since the column doesn't exist
        $testimonials = Testimonial::latest()
            ->take(5)
            ->get();
        $products = Product::get();
        
        return view('home', compact('categories', 'testimonials', 'products'));
    }

    public function contact()
    {
        return view('contact');
    }
}