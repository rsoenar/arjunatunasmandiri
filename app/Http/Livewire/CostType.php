<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\Models\Cost_type;

class CostType extends Component
{
    public $nama;
    protected $rules = [
        'nama' => 'required|string|min:6',
    ];
    protected $messages = [
        'nama.required' => 'Nama harus diisi.',
        'nama.string' => 'Nama harus berupa text atau string',
        'nama.min' => 'Minimal character Nama 6',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function save()
    {
        $validatedData = $this->validate();
    }
}
