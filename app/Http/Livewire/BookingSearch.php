<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingSearch extends Component
{
    public function render()
    {
        return view('livewire.booking-search')->layout('layouts.guest');
    }
}
