<?php

namespace App\Http\Livewire;

use App\Http\Resources\BrandMiniResource;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Product;

class ProductCollection extends Component
{
    public $pages = 10;
    public $sortBy = "created_at";
    public $sortMode = "DESC";

    public $products;
    public $photos;

    public $pageName;

    public $breadCrumb;


    public $filterGroups = [];

    public function mount(Category $category){
        $this->pageName =   $category->name ?? 'Featured';
        $this->breadCrumb =  "> ".$this->pageName;
    }

    public function render()
    {
        $this->filterGroups['brands'] = Brand::active()->pluck('name');

        // dd($this->filterGroups['brands']);
     
        $this->photos = getPhotos();

        $this->products = Product::with('brand','productTags')->orderBy($this->sortBy,$this->sortMode)->get();

        return view('livewire.product-collection')->extends('layouts.base')->section('body');
    }
}