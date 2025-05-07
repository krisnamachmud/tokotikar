<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'harga',
        'stok',
        'deskripsi_singkat',
        'deskripsi_panjang',
        'category_id',
        'gambar'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}