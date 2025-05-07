<?php


Route::get('/produk/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/',  [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('produk', [\App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('kontak-kami', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::post('/testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
Route::post('/testimonial', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial.store');