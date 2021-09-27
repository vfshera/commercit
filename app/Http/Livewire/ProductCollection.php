<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Product;
use Spatie\QueryBuilder\QueryBuilder;

class ProductCollection extends Component
{

    public $sort;
    public $sortVal;
    public $sortMode = "DESC";

    public $products;
    public $photos;

    //if from category route
    public Category $category;

    public $breadCrumb = "";



    protected $queryString = ['sort'];

    public $currPath;

    public $filterGroups = [
        "brands" => [],
        "size" => ['5+','6+','Mini'],
        "color" => ['Red','Green','Blue']
    ];




    public function setFilter(){
       

        if($this->sortMode === "DESC"){

            $this->sort = "-".$this->sortVal;
            
            
        }

        if($this->sortMode === "ASC"){

            $this->sort =  $this->sortVal;

        }


        redirect("/collections/featured/?sort=$this->sort");

    }

    public function updated(){
        $this->setFilter();

    }


    public function mount(){
        $this->breadCrumb = "> Category > ".ucwords($this->category->name);

            $this->products = $this->category->productCategories->map(function($productCategory){
                return $productCategory->product;
            });

            $this->filterGroups['brands'] = $this->products->map(function($product){
                return $product->brand->name;
            });


        $this->photos = getPhotos();
       
    }


    public function viewProduct(Product $product){ 

        return redirect()->route('collections.product-view',['product' => $product,'productSlug' => $product->slug]);

    }


    public function render()
    {
        return view('livewire.product-collection')->extends('layouts.base')->section('body');
    }
}
