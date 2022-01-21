<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShoppingCart extends Component
{
    public $cart;

    public function mount(){
        $this->cart = Product::take(6)->get();


        
    }
    public function render()
    {
        return view('livewire.shopping-cart');
    }
}