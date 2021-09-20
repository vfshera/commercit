<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductView extends Component
{

    public Product $product;
    public  $photos;
    public $displayPhoto;

    public function mount(){
        $this->photos = getPhotos();
        $this->displayPhoto = $this->photos[rand(0,5)];
    }


    public function render()
    {
        return view('livewire.product-view')->extends('layouts.base')->section('body');
    }
}
