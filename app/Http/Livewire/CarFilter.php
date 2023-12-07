<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarFilter extends Component
{
    public $status;
    public $search;
    public $cars;

    public function mount()
    {
        $this->cars = Car::get();
    }
    public function render()
    {
        return view('livewire.car-filter');
    }

    public function filter()
    {
        $this->emitTo('show-car', 'reloadCar', $this->status, $this->search);
    }
}
