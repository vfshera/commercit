<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SpecialOffer extends Component
{
    public $email = "";

    public function addOfferMail(){

        $this->email .= "Sent!";
    }

    public function render()
    {
        return view('livewire.special-offer');
    }
}
