<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description','meta_description', 'meta_keywords','meta_title'];

    // Automatically generate slug when creating/updating a category
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name); // Generate slug from name
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name); // Update slug if name changes
        });
    }
}
