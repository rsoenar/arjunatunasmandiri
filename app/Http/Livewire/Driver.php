<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Driver as Supir;

class Driver extends Component
{

    protected $Listeners = ['send'];

    public function render()
    {
        return view('livewire.driver', ['drivers' => Supir::paginate(3)]);
    }
}
