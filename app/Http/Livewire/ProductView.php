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
              

        $similarCategoryIDs = $this->product->productCategories->map(function($prodCategory){
            return $prodCategory->category_id;
        });

        
    


        $this->similarProducts = Product::where('id','!=',$this->product->id)
        ->with(['productCategories' => function($prodCat) use ($similarCategoryIDs){

            return $prodCat->whereIn('category_id',$similarCategoryIDs);

        }, 'productTags.tag' => function($pTag) use ($similarTagIDs){

            return $pTag->whereIn('id',$similarTagIDs);
            
        }])->take(5)->get();


        
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