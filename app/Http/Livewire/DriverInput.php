<?php

namespace App\Http\Livewire;

use Livewire\Component;


class DriverInput extends Component
{
    public $nama, $alamat, $kode_pos, $keterangan, $no_identitas, $email, $photo, $telepon;

    protected $rules = [
        'nama' => 'required|min:3|max:50',
        'alamat' => 'required|min:3|max:50',
        'kode_pos' => 'required|min:3|max:50',
        'keterangan' => 'required|min:3|max:50',
        'no_identitas' => 'required|min:3|max:50',
        'email' => 'email',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        return view('livewire.driver-input');
    }

    public function store()
    {
        $this->validate();
        return redirect()->to('/master/supir')->with('Message', 'Sukses');
        $this->dispatch('send', ['pesan' => 'Berhasil menyimpan data']);
    }
}
