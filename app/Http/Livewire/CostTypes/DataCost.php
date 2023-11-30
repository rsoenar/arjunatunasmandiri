<?php

namespace App\Http\Livewire\CostTypes;

use Livewire\Component;

class DataCost extends Component
{
    public $nama;

    public function render()
    {
        return view('livewire.cost-types.data-cost');
    }

    public function store()
    {
        $this->nama="rangga";
        // $rules=['nama' => 'required|min:6'];
        // $message = ['nama.required' => 'Nama wajib diisi'];

        // $validatedData = $this->validate($rules,$message);
  
    }
}
