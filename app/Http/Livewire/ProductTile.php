<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
    
class ProductTile extends Component
{

    public Product $product;

    
    public function view(){ 

        return redirect()->route('collections.product-view',['product' => $this->product,'productSlug' => $this->product->slug]);

    }
    
    public function render()
    {
        return view('livewire.product-tile');
    }
}