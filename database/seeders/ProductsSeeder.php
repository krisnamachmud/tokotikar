<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories
        $category1 = Category::create([
            'judul' => 'Tikar Tradisional',
            'gambar' => 'categories/tikar-tradisional.jpg',
            'deskripsi' => 'Tikar tradisional khas Lamongan dengan berbagai motif.'
        ]);

        $category2 = Category::create([
            'judul' => 'Tikar Premium',
            'gambar' => 'categories/tikar-premium.jpg',
            'deskripsi' => 'Tikar kualitas premium dengan motif eksklusif.'
        ]);

        // Create products
        Product::create([
            'nama' => 'Tikar Motif Merek Alibaba',
            'harga' => 70000,
            'deskripsi' => 'Tikar dengan motif merek Alibaba yang khas dan berkualitas tinggi.',
            'gambar' => 'img/tikar-item-1.jpg',
            'category_id' => $category1->id,
            'stok' => 50
        ]);

        Product::create([
            'nama' => 'Tikar Motif Merek Angsa',
            'harga' => 90000,
            'deskripsi' => 'Tikar dengan motif merek Angsa yang khas dan berkualitas premium.',
            'gambar' => 'img/tikar-item-2.jpg',
            'category_id' => $category2->id,
            'stok' => 30
        ]);

        Product::create([
            'nama' => 'Tikar Merek Anugrah',
            'harga' => 70000,
            'deskripsi' => 'Tikar dengan motif merek Anugrah yang khas dan berkualitas tinggi.',
            'gambar' => 'img/tikar-item-3.jpg',
            'category_id' => $category1->id,
            'stok' => 45
        ]);

        Product::create([
            'nama' => 'Tikar Motif Merek Elresas',
            'harga' => 85000,
            'deskripsi' => 'Tikar dengan motif merek Elresas yang khas dan berkualitas premium.',
            'gambar' => 'img/tikar-item-4.jpg',
            'category_id' => $category2->id,
            'stok' => 25
        ]);
    }
}