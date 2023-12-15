<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car as Kendaraan;
use Livewire\WithFileUploads;

class Car extends Component
{
    use WithPagination;

    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $status = '';

    public $delete_id;

    public $listeners = ['DeleteConfirmed' => 'DeleteCar', 'setDatePajak', 'setDateStnk'];

    public $nama, $merk, $warna, $transmisi = '', $no_pol, $no_rangka;
    public $no_mesin, $bahan_bakar = '', $tahun_produksi = '', $tanggal_pajak, $tanggal_stnk;
    public $pemilik, $keterangan, $photo;

    public function render()
    {
        return view('livewire.car', [
            'cars' => Kendaraan::where('nama', 'like', '%' . $this->search)->paginate(5),
        ]);
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
        'keterangan' => 'keterangan',
        'photo' => 'photo kendaraan'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
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
            'keterangan' => $this->keterangan,
            'photo' => $this->photo ? $this->photo->hashName() : $this->photo = ''
        ];

        if (!empty($this->photo)) {
            $this->photo->store('images-car', 'public');
        }

        $validated = $this->validate();
        Kendaraan::create($data);
        $this->reset('nama', 'merk', 'warna', 'transmisi', 'no_pol', 'no_mesin', 'no_rangka', 'bahan_bakar', 'tahun_produksi', 'tanggal_pajak', 'tanggal_stnk', 'pemilik', 'photo');
        $this->emit('success', ['pesan' => 'Berhasil menyimpan data']);
        $this->dispatchBrowserEvent('close-modal');
    }

    public function DeleteConfirmation(int $id)
    {
        $this->delete_id = $id;
        $this->emit('show-delete-confirm');
    }

    public function DeleteCar()
    {
        $car = Kendaraan::where('id', $this->delete_id)->first();
        $car->delete();

        $this->emit('CarDeleted', ['pesan' => 'Berhasil menghapus data']);
    }

    public function editCar(int $id)
    {
        $car = Kendaraan::find($id);

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
            $this->pemilik = $car->pimilik;
            $this->keterangan = $car->keterangan;
        }
    }
}
