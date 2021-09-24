<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class SearchBox extends Component
{
    public $search = "";
    public $hasSearched = true;

    public $category = "";

    public $categories;


    public $searchedProducts = [];




    public function search(){
        
    }

    public function updated(){

        $this->searchedProducts = Product::when($this->category , function($query, $category_id){
            return $query->where('brand_id', $category_id);
        })->when($this->search , function($query, $search){
            return $query->where('title', "LIKE" , "%$search%");
        })->get();

        if(count($this->searchedProducts) > 0){
            $this->hasSearched = true;
        }
    }


    public function mount(){
        $this->categories = Category::get(['name' , 'id']);

      
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}