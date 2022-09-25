<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingForm extends Component
{
    public function render()
    {
        return view('livewire.booking-form')->layout('layouts.guest');
    }
}
