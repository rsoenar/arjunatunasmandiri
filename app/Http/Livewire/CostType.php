<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cost_type;

class CostType extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $nama;
    public $data;

    protected $rules = [
        'nama' => 'required|string|min:6',
    ];

    protected $messages = [
        'nama.required' => 'Nama harus diisi.',
        'nama.string' => 'Nama harus berupa text atau string',
        'nama.min' => 'Minimal character Nama 6',
    ];

    public function render()
    {

        return view(
            'livewire.cost-type',
            [
                'costs' => Cost_type::paginate(5),
            ]
        );
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
        $this->resetValidation($fields);
    }

    private function ResetInput()
    {
        $this->nama = '';
    }

    public function store()
    {
        $validatedData = $this->validate();
        Cost_type::create($validatedData);
        self::ResetInput();
        session()->flash('message', 'Sukses menyimpan data');
        $this->dispatchBrowserEvent('close-modal');
    }
}
