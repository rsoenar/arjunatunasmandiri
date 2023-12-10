<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Driver extends Component
{

    protected $Listeners=['send'];

    public function render()
    {
        return view('livewire.driver');
    }
}
