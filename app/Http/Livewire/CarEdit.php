<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
use Livewire\WithFileUploads;
use File;

class CarEdit extends Component
{
    use WithFileUploads;

    public $nama, $merk, $warna, $transmisi = '', $no_pol, $no_rangka;
    public $no_mesin, $bahan_bakar = '', $tahun_produksi = '', $tanggal_pajak, $tanggal_stnk;
    public $pemilik, $keterangan, $photo;
    public $newphoto, $id, $car_edit_id;


    public function render()
    {
        return view('livewire.car-edit');
    }

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
        'keterangan' => 'nullable',
    ];

    public function mount($id)
    {
        $car = Car::where('id', $id)->first();

        if ($car) {
            $this->id = $car->id;
            $this->nama =  $car->nama;
            $this->merk = $car->merk;
            $this->warna = $car->warna;
            $this->transmisi = $car->transmisi;
            $this->no_pol = $car->no_pol;
            $this->no_rangka = $car->no_rangka;
            $this->no_mesin = $car->no_mesin;
            $this->bahan_bakar = $car->bahan_bakar;
            $this->tahun_produksi = $car->tahun_produksi;
            $this->tanggal_pajak = $car->tanggal_pajak;
            $this->tanggal_stnk = $car->tanggal_stnk;
            $this->photo = $car->photo;
            $this->pemilik = $car->pemilik;
            $this->keterangan = $car->keterangan;

            $this->car_edit_id = $car->id;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function updateCar()
    {
        $this->validate([
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
            'keterangan' => 'nullable',
        ]);

        $car = Car::where('id', $this->car_edit_id)->first();

        $car->id = $this->id;
        $car->nama = $this->nama;
        $car->merk = $this->merk;
        $car->warna = $this->warna;
        $car->transmisi = $this->transmisi;
        $car->no_pol = $this->no_pol;
        $car->no_rangka = $this->no_rangka;
        $car->no_mesin = $this->no_mesin;
        $car->bahan_bakar = $this->bahan_bakar;
        $car->tahun_produksi = $this->tahun_produksi;
        $car->tanggal_pajak = $this->tanggal_pajak;
        $car->tanggal_stnk = $this->tanggal_stnk;
        $car->photo = $this->newphoto ? $this->newphoto->hashName() : $this->newphoto = '';
        $car->pemilik = $this->pemilik;
        $car->keterangan = $this->keterangan;

        if (!empty($this->newphoto)) {
            $this->newphoto->store('images-car', 'public');
        }

        $car->save();

        return redirect()->to('/master/kendaraan')->with('Update', 'Data berhasil diubah');
    }
}
