<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductCollection extends Component
{

    public $products;
    public $photos;

    public $filterGroups = [
        "type" => ['Hp','Apple','Samsung'],
        "size" => ['5+','6+','Mini'],
        "color" => ['Red','Green','Blue']
    ];

    public function mount(){
        $this->products = Product::with('brand','productTags')->orderBy('created_at','DESC')->get();
        $this->photos = getPhotos();
    }

    public function render()
    {
        return view('livewire.product-collection')->extends('layouts.base')->section('body');
    }
}
