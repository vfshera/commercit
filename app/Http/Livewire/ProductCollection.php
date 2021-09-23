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


    }

    public function updated(){
        $this->setFilter();

    }


    public function mount(){
        $this->filterGroups['brands'] = Brand::active()->pluck('name');

        $this->products = QueryBuilder::for(Product::class)->defaultSort('title')->allowedSorts(['title' , 'price'])->get();
        // $this->products = Product::with('brand','productTags')->orderBy('created_at','DESC')->get();
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
