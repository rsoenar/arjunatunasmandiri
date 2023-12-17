<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Driver as Supir;
use Livewire\WithPagination;

class Driver extends Component
{
    use WithPagination;

    public $search='';

    public $delete_id;

    protected $Listeners = ['send'];

    protected $paginationTheme = 'bootstrap';

    public $listeners = ['DeleteConfirmed' => 'DeleteDriver'];

    public function render(){
    return view('livewire.driver', [
            'drivers' => Supir::where('nama', 'like', '%' . $this->search .'%')->paginate(5),
        ]);
    }

     public function DeleteConfirmation(int $id)
    {
        $this->delete_id = $id;
        $this->dispatch('show-delete-confirm');
    }

    public function DeleteDriver()
    {
        $driver = Supir::where('id', $this->delete_id)->first();
        $driver->delete();

        $this->dispatch('DriverDeleted', ['pesan' => 'Berhasil menghapus data']);
    }
}
