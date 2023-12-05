<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CarInput extends Component
{
    public $nama;
    // $merk,$warna,$jenis,$nopol,$norangka;
    // public $nomesin,$bbm,$tahunprod,$tglPajak,$tglStnk;
    // public $owner,$keterangan,$photo;

    protected $rules=[
        'nama' => 'required|min:3|max:20',
        // 'merk' => 'required|min:3|max:20',
        // 'warna' => 'required|min:3|max:20',
        // 'jenis' => 'required|min:3|max:20',
        // 'nopol' => 'required|min:3|max:20',
        // 'norangka' => 'required|min:3|max:20',
        // 'nomesin' => 'required|min:3|max:20',
        // 'bbm' => 'required|min:3|max:20',
        // 'tahunprod' => 'required|min:3|max:20',
        // 'tglPajak' => 'required|min:3|max:20',
        // 'tglStnk' => 'required|min:3|max:20',
        // 'owner' => 'required|min:3|max:20',
    ];

    protected $validationAttributes = [
        'nama' => 'nama kendaraan',
        // 'merk' => 'merk kendaraan',
        // 'warna' => 'warna kendaraan',
        // 'jenis' => 'jensi kendaraan',
        // 'nopol' => 'nomor polisi',
        // 'norangka' => 'nomor rangka',
        // 'nomesin' => 'nomor mesin',
        // 'bbm' => 'bahan bakar',
        // 'tahunprod' => 'tahun buat',
        // 'tglPajak' => 'tanggal pajak jatuh tempo',
        // 'tglStnk' => 'tanggal STNK',
        // 'owner' => 'pemilik',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        return view('livewire.car-input');
    }

    public function store()
    {
        $this->validate();
    }
}
