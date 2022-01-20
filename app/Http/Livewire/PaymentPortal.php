<?php

namespace App\Http\Livewire;

use Livewire\Component;

use MpesaService;

class PaymentPortal extends Component
{
    
    public function render()
    {
        return view('livewire.payment-portal')->extends('layouts.base')->section('body');

    }
}
