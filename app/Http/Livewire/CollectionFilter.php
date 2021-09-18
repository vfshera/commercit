<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CollectionFilter extends Component
{

    public $filterGroups = [
        "type" => ['Hp','Apple','Samsung'],
        "size" => ['5+','6+','Mini'],
        "color" => ['Red','Green','Blue']
    ];


    public function render()
    {     

        return view('livewire.collection-filter');
    }
}
