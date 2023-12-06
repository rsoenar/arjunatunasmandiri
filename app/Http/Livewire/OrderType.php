<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order_type;

class OrderType extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public $nama;

    public $delete_id;

    public $listeners = ['DeleteConfirmed' => 'DeleteOrder'];

    protected $rules = [
        'nama' => 'required|min:3|max:50',
    ];

    // protected $messages = [
    //     'nama.required' => 'Nama harus diisi.',
    //     'nama.min' => 'Minimal character Nama 6',
    // ];

    protected $validationAttributes = [
        'nama' => 'nama order'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.order-type', [
            'orders' => Order_type::where('nama', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    private function ResetInput()
    {
        $this->nama = '';
    }

    public function store()
    {
        $validatedData = $this->validate();
        Order_type::create($validatedData);
        $this->emit('success', ['pesan' => 'Berhasil menyimpan data']);
        self::ResetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function DeleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->emit('show-delete-confirm');
    }

    public function DeleteOrder()
    {
        $order = Order_type::where('id', $this->delete_id)->first();
        $order->delete();

        $this->emit('OrderDeleted', ['pesan' => 'Berhasil menghapus data']);
    }
}
