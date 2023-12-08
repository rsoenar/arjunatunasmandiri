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

    public $delete_id;

    public $listeners = ['DeleteConfirmed' => 'DeleteCar'];

    public function render()
    {
        return view('livewire.car', [
            'cars' => Kendaraan::where('nama', 'like', '%' . $this->search)->paginate(7),
        ]);
    }

    public function DeleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->emit('show-delete-confirm');
    }

    public function DeleteCar()
    {
        $car = Kendaraan::where('id', $this->delete_id)->first();
        $car->delete();

        $this->emit('CarDeleted', ['pesan' => 'Berhasil menghapus data']);
    }
}
