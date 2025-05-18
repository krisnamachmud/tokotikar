<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    // You can use either $guarded or $fillable, but not both for the same fields
    // Since you want to protect id, and fill the rest, let's use $guarded
    protected $guarded = ['id'];
    
    // Gunakan slug sebagai parameter URL alih-alih ID
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    // Relasi dengan model Product (one-to-many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}