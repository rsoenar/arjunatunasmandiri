<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Driver;
use Livewire\WithFileUploads;

class DriverInput extends Component
{
    use WithFileUploads;

    public $nama, $alamat, $kode_pos, $keterangan, $no_identitas, $email, $photo_url, $telepon;

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

        $data = [
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'kode_pos' => $this->kode_pos,
            'keterangan' => $this->keterangan,
            'no_identitas' => $this->no_identitas,
            'telepon' => $this->telepon,
            'email' => $this->email,
            'photo_url' => !empty($this->photo_url) ? $this->photo_url->hashName() : $this->photo_url = ''
        ];

        if (!empty($this->photo_url)) {
            $this->photo_url->store('images-supir', 'public');
        }

        Driver::Create($data);
        return redirect()->to('/master/supir')->with('Success', 'Data Berhasil disimpan');
    }
}
