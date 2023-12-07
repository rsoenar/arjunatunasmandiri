<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class CarInput extends Component
{
    use WithFileUploads;

    public $nama, $merk, $warna, $transmisi = '', $no_pol, $no_rangka;
    public $no_mesin, $bahan_bakar = '', $tahun_produksi = '', $tanggal_pajak, $tanggal_stnk;
    public $pemilik, $keterangan, $photo;

    protected $listeners = ['setDatePajak', 'setDateStnk'];

    protected $rules = [
        'nama' => 'required',
        'merk' => 'required',
        'warna' => 'required|max:10',
        'transmisi' => 'required',
        'no_pol' => 'required',
        'no_rangka' => 'required',
        'no_mesin' => 'required',
        'bahan_bakar' => 'required',
        'tahun_produksi' => 'required',
        'tanggal_pajak' => 'required',
        'tanggal_stnk' => 'required',
        'pemilik' => 'required',
        'photo' => 'image|max:1024|mimes:png,jpg',
    ];

    protected $validationAttributes = [
        'nama' => 'nama kendaraan',
        'merk' => 'merk kendaraan',
        'warna' => 'warna kendaraan',
        'transmisi' => 'jenis kendaraan',
        'no_pol' => 'nomor polisi',
        'no_rangka' => 'nomor rangka',
        'no_mesin' => 'nomor mesin',
        'bahan_bakar' => 'bahan bakar',
        'tahun_produksi' => 'tahun buat',
        'tanggal_pajak' => 'tanggal pajak jatuh tempo',
        'tanggal_stnk' => 'tanggal STNK',
        'pemilik' => 'nama pemilik',
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

    public function setDatePajak($data)
    {
        $this->tanggal_pajak = $data;
    }

    public function setDateStnk($data)
    {
        $this->tanggal_stnk = $data;
    }

    public function store()
    {
        $data = [
            'nama' => $this->nama,
            'merk' => $this->merk,
            'warna' => $this->warna,
            'transmisi' => $this->transmisi,
            'no_pol' => $this->no_pol,
            'no_rangka' => $this->no_rangka,
            'no_mesin' => $this->no_mesin,
            'bahan_bakar' => $this->bahan_bakar,
            'tahun_produksi' => $this->tahun_produksi,
            'tanggal_pajak' => $this->tanggal_pajak,
            'tanggal_stnk' => $this->tanggal_stnk,
            'pemilik' => $this->pemilik,
            'photo' => $this->photo->hashName(),
        ];
        if (!empty($this->photo)) {
            $this->photo->storeAs('public/images-car');
        }
        $validated = $this->validate();
        Car::create($data);
        // $this->reset('nama', 'merk', 'warna', 'transmisi', 'no_pol', 'no_mesin', 'no_rangka', 'bahan_bakar', 'tahun_produksi', 'tanggal_pajak', 'tanggal_stnk', 'pemilik', 'photo');
        $this->emit('success', ['pesan' => 'Berhasil menyimpan data']);
        // return redirect()->to('/master/kendaraan');
    }
}
