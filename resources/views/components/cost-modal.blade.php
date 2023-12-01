<!-- Modal -->
<div wire:ignore.self class="modal fade" id="modal-master-biaya">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Master Biaya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="store" id='form-modal-biaya'>
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                        </div>
                        <input type="text" wire:model="nama" class="form-control" placeholder="Nama Biaya">
                    </div>
                    @error('nama')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary" wire:click="store">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
