<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Driver;
use Livewire\WithFileUploads;

class DriverEdit extends Component
{
    use WithFileUploads;

    public $nama, $alamat, $kode_pos, $keterangan, $no_identitas, $email, $photo_url, $telepon, $status;
    public $newphoto, $driver_edit_id, $id;

    protected $rules = [
        'nama' => 'required|min:3|max:50',
        'alamat' => 'required|min:3|max:50',
        'kode_pos' => 'required|min:3|max:50',
        'keterangan' => 'required|min:3|max:50',
        'no_identitas' => 'required|min:3|max:50',
        'email' => 'email',
    ];
    public function render()
    {
        return view('livewire.driver-edit');
    }

    public function mount($id)
    {
        $driver = Driver::where('id', $id)->first();

        if ($driver) {
            $this->id = $driver->id;
            $this->nama =  $driver->nama;
            $this->alamat = $driver->alamat;
            $this->telepon = $driver->telepon;
            $this->kode_pos = $driver->kode_pos;
            $this->keterangan = $driver->keterangan;
            $this->no_identitas = $driver->no_identitas;
            $this->photo_url = $driver->photo_url;
            $this->status = $driver->status;
            $this->email=$driver->email;
            $this->driver_edit_id = $driver->id;
        }
    }

    public function updateDriver()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required|max:10',
            'email' => 'required',
            'telepon' => 'required',
            'keterangan' => 'nullable',
        ]);

        $driver = Driver::where('id', $this->driver_edit_id)->first();

        $driver->id = $this->id;
        $driver->nama = $this->nama;
        $driver->alamat = $this->alamat;
        $driver->kode_pos = $this->kode_pos;
        $driver->email = $this->email;
        $driver->telepon = $this->telepon;
        $driver->status = $this->status;
        $driver->keterangan = $this->keterangan;
        $driver->photo_url = !empty($this->newphoto) ? $this->newphoto->hashName() : $this->photo_url;

        if (!empty($this->newphoto)) {
            $this->newphoto->store('images-supir', 'public');
        }

        $driver->save();

        return redirect()->to('/master/supir')->with('Update', 'Data berhasil diubah');
    }
}
