<div>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form tambah data supir</h3>
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
                            <input type="text" wire:model="nama"
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
                            <input type="text" wire:model='alamat'
                                class="form-control col @error('alamat') is-invalid @enderror" placeholder="Alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Kode Pos</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-home"></i></span>
                            </div>
                            <input type="text" wire:model='kode_pos'
                                class="form-control col @error('kode_pos') is-invalid @enderror" placeholder="Kode pos">
                            @error('kode_pos ')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
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
                            <input type="text" wire:model='no_identitas'
                                class="form-control col @error('no_identitas') is-invalid @enderror"
                                placeholder="Nomor Identitas KTP">
                            @error('no_identitas ')
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
                            <input type="text" wire:model='email'
                                class="form-control col @error('email') is-invalid @enderror" placeholder="Email">
                            @error('email ')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="col-form-label">Foto</label>
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-image"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" wire:model='photo' class="form-control">
                                {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row" wire:loading.delay>
                        Loading...
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3 ml-6">
                            {{-- @if ($photo)
                                <img class="img-thumbnail" style="width: 180px; height: 160px; margin:auto;"
                                    src="{{ $photo->temporaryURL() }}" alt="">
                            @endif --}}
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" wire:click='store' class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
