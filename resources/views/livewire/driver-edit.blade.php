<div wire:ignore.self>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form edit data supir</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Basic Info</label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-form-label">Nama</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-list-ol"></i></span>
                            </div>
                            <input type="text" wire:model.live="nama"
                                class="form-control col @error('nama') is-invalid @enderror" placeholder="Nama Supir">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Alamat</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-address-book"></i></span>
                            </div>
                            <input type="text" wire:model.live='alamat'
                                class="form-control col @error('alamat') is-invalid @enderror" placeholder="Alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-form-label">Kode Pos</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-home"></i></span>
                            </div>
                            <input type="text" wire:model.live='kode_pos'
                                class="form-control col @error('kode_pos') is-invalid @enderror" placeholder="Kode pos">
                            @error('kode_pos')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Keterangan</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-file"></i></span>
                            </div>
                            <textarea class="form-control col" wire:model.defer='keterangan' rows="1" cols="4" placeholder="Keterangan"></textarea>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Status Supir</label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-form-label">Status</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-cog"></i></span>
                            </div>
                            <select class="form-control" wire:model.live='status'>
                                <option value="1">Status</option>
                                <option value="1" {{ $this->status == 1 ? 'selected' : '' }}>Aktif</option>
                                <option value="2" {{ $this->status == 2 ? 'selected' : '' }}>Non Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <hr class="hr" />
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Personal Info</label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-form-label">No Identitas</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-id-card"></i></span>
                            </div>
                            <input type="text" wire:model.live='no_identitas'
                                class="form-control col @error('no_identitas') is-invalid @enderror"
                                placeholder="Nomor Identitas KTP">
                            @error('no_identitas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-envelope-open-text"></i></span>
                            </div>
                            <input type="text" wire:model.live='email'
                                class="form-control col @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Edit Foto Kendaraan</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-image"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" wire:model.live='newphoto' class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row" wire:loading.delay>
                        Loading...
                    </div>
                    <div class="form-group" wire:loading.remove>
                        <div class="input-group mb-3 ml-6">
                            @if ($newphoto)
                                <img class="img-thumbnail" style="width: 180px; height: 160px; margin:auto;"
                                    src="{{ $newphoto->temporaryURL() }}" alt="">
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-form-label">No Telepon</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" wire:model.live='telepon'
                                class="form-control col @error('telepon') is-invalid @enderror"
                                placeholder="Nomor Telepon">
                            @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Foto Supir</label>
                        <div class="input-group mb-3 ml-6 center">
                            <img class="img-thumbnail" style="width: 180px; height: 160px; margin:auto;"
                                src="{{ URL::asset('storage/images-supir/' . $this->photo_url) }}" alt="No Photo" />
                            <input type="hidden" wire:model.live='photo_url' class="form-control col">
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" wire:click.prevent='updateDriver' class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
