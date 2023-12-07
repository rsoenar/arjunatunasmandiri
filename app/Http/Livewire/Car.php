<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car as Kendaraan;

class Car extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $status = '';

    public function render()
    {
        return view('livewire.car', [
            'cars' => Kendaraan::where('nama', 'like', '%' . $this->search . '%', 'and','status', 'like', '%' . $this->status . '%')->paginate(6),
        ]);
    }
}
