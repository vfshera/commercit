<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    

    protected $fillable = ['title' , 'brand_id' , 'description' , 'price'];

    public function productTags(){
        return $this->hasMany(ProductTag::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

}
