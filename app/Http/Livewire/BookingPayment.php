<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingPayment extends Component
{
    public function render()
    {
        return view('livewire.booking-payment')->layout('layouts.guest');
    }
}
