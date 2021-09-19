<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCollection extends Component
{

    public $products;

    public $filterGroups = [
        "type" => ['Hp','Apple','Samsung'],
        "size" => ['5+','6+','Mini'],
        "color" => ['Red','Green','Blue']
    ];

    public function mount(){
        $this->products = getProducts();
    }

    public function render()
    {
        return view('livewire.product-collection')->extends('layouts.base')->section('body');
    }
}
