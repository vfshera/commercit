<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Spatie\QueryBuilder\QueryBuilder;


class FeaturedCollection extends Component
{

    public $sort;
    public $sortVal;
    public $sortMode = "DESC";

    public $products;
    public $photos;

    public $breadCrumb = "> Featured";



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

        
        $this->products = QueryBuilder::for(Product::class)->defaultSort('title')->allowedSorts(['title' , 'price'])->get();

       
            $this->filterGroups['brands'] = Brand::active()->pluck('name');

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
