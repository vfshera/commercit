<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function productCategories(){
        return $this->hasMany(ProductCategory::class);
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->attributes['name'], '-');
    }

}
