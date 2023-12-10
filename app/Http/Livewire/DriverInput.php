<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DriverInput extends Component
{

    public $nama='';

    protected $rules = [
        'nama' => 'required|min:3|max:50',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        return view('livewire.driver-input');
    }

    public function send()
    {
        return redirect()->to('/master/supir')->with('Message','Sukses');
        $this->emit('send',['pesan' => 'Berhasil menyimpan data']);
    }
}
