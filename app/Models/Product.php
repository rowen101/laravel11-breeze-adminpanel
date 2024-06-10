<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Product extends Model
{
    use HasSlug;
    use HasFactory;

    protected $fillable =[
        'title',
        'slug',
        'description',
        'inStock',
        'price',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function product_image()
    {
        return $this->hasMany(Productimage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
