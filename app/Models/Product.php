<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    

    protected $fillable = ['title' , 'brand_id' , 'description' , 'price'];


    public function getSlugAttribute()
    {
        return Str::slug($this->attributes['title'], '-');
    }

    public function productTags(){
        return $this->hasMany(ProductTag::class , 'product_id' , 'id');
    }

    public function productCategories(){
        return $this->hasMany(ProductCategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
