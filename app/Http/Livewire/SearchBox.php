<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class SearchBox extends Component
{
    public $search = "";
    public $hasSearched = false;

    public $category = "";

    public $categories;


    public $searchedProducts = [];




    public function search(){
        
    }

    public function updated(){

        if(!empty($this->category) || !empty($this->search)){

            $this->searchedProducts = Product::when($this->category , function($query, $category_id){
                return $query->where('brand_id', $category_id);
            })->when($this->search , function($query, $search){
                return $query->where('title', "LIKE" , "%$search%");
            })->get();

        }else{
            
            $this->searchedProducts = [];

        }

        if(count($this->searchedProducts) > 0){
            $this->hasSearched = true;
        }else{
            $this->hasSearched = false;
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
