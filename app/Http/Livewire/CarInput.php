<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class CarInput extends Component
{
    use WithFileUploads;

    public $nama, $merk, $warna, $jenis, $nopol, $norangka, $nomesin, $bbm, $tahunprod, $tglPajak, $tglStnk, $owner, $keterangan, $photo;

    protected $listeners = ['setDatePajak','setDateStnk'];

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
        'photo' => 'photo kendaraan'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function render()
    {
        return view('livewire.car-input');
    }

    public function setDatePajak($data){
        $this->tglPajak=$data;
    }

    public function setDateStnk($data){
        $this->tglStnk=$data;
    }

    public function store()
    {
        $validated = $this->validate();
        dd($this->nama,$this->tglStnk);
        // $this->validate([
        //     'photo.*' => 'image|max:1024|mimes:png,jpg',
        // ]);

        // if($this->photo){
        //     $this->photo->store('images-car');
        // }

        // Car::create($validated);
        // $this->reset('nama','merk');

    }
}
