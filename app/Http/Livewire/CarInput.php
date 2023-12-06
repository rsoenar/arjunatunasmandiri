<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarInput extends Component
{
    public $nama, $merk, $warna, $jenis, $nopol, $norangka;
    public $nomesin, $bbm, $tahunprod, $tglPajak, $tglStnk;
    public $owner, $keterangan, $photo;

    protected $rules = [
        'nama' => 'required',
        'merk' => 'required',
        'warna' => 'required|max:10',
        'jenis' => 'required',
        'nopol' => 'required',
        'norangka' => 'required',
        'nomesin' => 'required',
        'bbm' => 'required',
        'tahunprod' => 'required',
        'tglPajak' => 'required',
        'tglStnk' => 'required',
        'owner' => 'required',
    ];

    protected $validationAttributes = [
        'nama' => 'nama kendaraan',
        'merk' => 'merk kendaraan',
        'warna' => 'warna kendaraan',
        'jenis' => 'jenis kendaraan',
        'nopol' => 'nomor polisi',
        'norangka' => 'nomor rangka',
        'nomesin' => 'nomor mesin',
        'bbm' => 'bahan bakar',
        'tahunprod' => 'tahun buat',
        'tglPajak' => 'tanggal pajak jatuh tempo',
        'tglStnk' => 'tanggal STNK',
        'owner' => 'nama pemilik',
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
        $validatedData = $this->validate();
        Car::create($validatedData);
        $this->emit('success', ['pesan' => 'Berhasil menyimpan data']);
        self::ResetInput();
        return redirect()->route('car');
    }
}
