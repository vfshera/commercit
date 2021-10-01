<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductTag;

class ProductView extends Component
{

    public Product $product;
    public  $photos;
    public  $similarProducts;
    public $displayPhoto;

    public function mount(){

        $similarTagIDs = $this->product->productTags->map(function($productTag){
            return $productTag->id;
        });

        $this->similarProducts = ProductTag::whereIn('id' , $similarTagIDs)->with('product.brand')->get()->map(function($ptag){
            return $ptag->product;
        });
        // $this->similarProducts = Product::whereHas('productTags', function ($query) use ($similarTagIDs){
        //      return $query->whereIn('id', $similarTagIDs);
        // })->get();

        // ddd($this->similarProducts);

        $this->photos = getPhotos();
        $this->displayPhoto = $this->photos[rand(0,5)];

    }


    public function render()
    {
        return view('livewire.product-view')->extends('layouts.base')->section('body');
    }
}
