<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('kontak-kami', [HomeController::class, 'contact'])->name('contact');

// Product routes
Route::get('produk', [ProductController::class, 'index'])->name('products.index'); // Changed from 'product' to 'products.index'
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::get('produk/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('categories/{id}/products', [ProductController::class, 'byCategory'])->name('products.category');

// Testimonial routes
Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

// Payment routes
Route::post('payment/notification', [PaymentController::class, 'notification'])->name('payment.notification');
Route::get('payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('payment/pending', [PaymentController::class, 'pending'])->name('payment.pending');
Route::get('payment/error', [PaymentController::class, 'error'])->name('payment.error');