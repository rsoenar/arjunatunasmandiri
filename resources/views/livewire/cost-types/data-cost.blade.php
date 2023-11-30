<div>
    <div class="card">
        <div class="card-header">
            <div class="grid">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-master-biaya">
                    Tambah Data
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="tab_master_biaya" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td><button>delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-master-biaya">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form Master Biaya</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                        </div>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Biaya"
                            wire:model="nama">
                        @error('nama')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" wire:click="store()">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</div>
