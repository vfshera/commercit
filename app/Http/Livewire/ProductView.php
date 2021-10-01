<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductTag;

class ProductView extends Component
{

    public Product $product;
    public  $photos;
    public  $similarProducts = [];
    public $displayPhoto;

    public function mount(){

        $similarTagIDs = $this->product->productTags->map(function($productTag){
            return $productTag->id;
        });
        
        
        $this->similarProducts = ProductTag::whereIn('id' , $similarTagIDs)->with('product.brand')->get()->map(function($ptag){
            return $ptag->product;
        })->reject(function ($pro, $key) {
            return $pro->id == $this->product->id;
        });
        

        $this->photos = getPhotos();
        $this->displayPhoto = $this->photos[rand(0,5)];

    }


    public function viewProduct(Product $product){ 

        return redirect()->route('collections.product-view',['product' => $product,'productSlug' => $product->slug]);

    }


    public function render()
    {
        return view('livewire.product-view')->extends('layouts.base')->section('body');
    }
}
