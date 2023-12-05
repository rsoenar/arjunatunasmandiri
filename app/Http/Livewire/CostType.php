<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cost_type;

class CostType extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $nama;

    public $delete_id;

    public $listeners = ['DeleteConfirmed' => 'DeleteBiaya'];

    protected $rules = [
        'nama' => 'required|min:3|max:50',
    ];

    protected $messages = [
        'nama.required' => 'Nama harus diisi.',
        'nama.min' => 'Minimal character Nama 6',
    ];

    protected $validationAttributes = [
        'nama' => 'nama biaya'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        return view(
            'livewire.cost-type',
            [
                'costs' => Cost_type::where('nama', 'like', '%' . $this->search . '%')->paginate(5),
            ]
        );
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    private function ResetInput()
    {
        $this->nama = '';
    }

    public function store()
    {
        $validatedData = $this->validate();
        Cost_type::create($validatedData);
        $this->emit('success', ['pesan' => 'Berhasil menyimpan data']);
        self::ResetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function DeleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->emit('show-delete-confirm');
    }

    public function DeleteBiaya()
    {
        $cost = Cost_type::where('id', $this->delete_id)->first();
        $cost->delete();

        $this->emit('CostDeleted', ['pesan' => 'Berhasil menghapus data']);
    }
}
