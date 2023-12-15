<div wire:ignore.self>
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form create kendaraan</h3>
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
        <form wire:submit="updateCar">
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
                            <label class="col-form-label">Nama Kendaraan</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-car"></i></span>
                                </div>
                                <input type="text" wire:model.live="nama"
                                    class="form-control col @error('nama') is-invalid @enderror"
                                    placeholder="Nama Kendaraan">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Merk Kendaraan</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-copyright"></i></span>
                                </div>
                                <input type="text" wire:model.live='merk'
                                    class="form-control col @error('merk') is-invalid @enderror"
                                    placeholder="Merk Kendaraan">
                                @error('merk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Transmisi</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-cog"></i></span>
                                </div>
                                <select class="form-control" wire:model.live='transmisi'>
                                    <option value="manual" selected>Transmisi</option>
                                    <option value="manual">Manual</option>
                                    <option value="automatic">Automatic</option>
                                    <option value="electric">Electric</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Bahan Bakar</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-oil-can"></i></span>
                                </div>
                                <select class="form-control" wire:model.live='bahan_bakar'>
                                    <option value="premium" selected>Bahan bakar</option>
                                    <option value="premium">Premium</option>
                                    <option value="pertamax">Pertamax</option>
                                    <option value="solar">Solar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Tahun Produksi</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                </div>
                                <select class="form-control" wire:model.live='tahun_produksi'>
                                    <option value="2012" selected>Tahun produksi</option>
                                    {{ $last = date('Y') - 12 }}
                                    {{ $now = date('Y') }}
                                    @for ($i = $now; $i >= $last; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Warna</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-brush"></i></span>
                                </div>
                                <input type="text" wire:model.live='warna'
                                    class="form-control col @error('warna') is-invalid @enderror"
                                    placeholder="Warna kendaraan sesuai STNK">
                                @error('warna')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="form-group">
                            <label class="col-form-label">Pemilik</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" wire:model.live='pemilik'
                                    class="form-control col @error('pemilik') is-invalid @enderror"
                                    placeholder="Nama pemilik">
                                @error('pemilik')
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
                                <textarea class="form-control col" wire:model.live.defer='keterangan' rows="1" cols="4"
                                    placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Foto Kendaraan</label>
                            <div class="input-group mb-3 ml-6">
                                <img src="{{ URL::asset('storage/images-car/' . $this->photo) }}" />
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
                    <!-- /.col -->
                </div>
                <hr class="hr" />
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Detail Car Info</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-5">

                        <div class="form-group">
                            <label class="col-form-label">Nomor Polisi</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-hashtag"></i></span>
                                </div>
                                <input type="text" wire:model.live='no_pol'
                                    class="form-control col @error('no_pol') is-invalid @enderror"
                                    placeholder="Nomor Polisi">
                                @error('no_pol')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nomor Rangka</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-fingerprint"></i></span>
                                </div>
                                <input type="text" wire:model.live='no_rangka'
                                    class="form-control col @error('no_rangka') is-invalid @enderror"
                                    placeholder="Nomor Rangka">
                                @error('no_rangka')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nomor Mesin</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-car-battery"></i></span>
                                </div>
                                <input type="text" wire:model.live='no_mesin'
                                    class="form-control col @error('no_mesin') is-invalid @enderror"
                                    placeholder="Nomor Mesin">
                                @error('no_mesin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="col-form-label">Tanggal Pajak</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar-week"></i></span>
                                </div>
                                <input id="picker-pajak" type="text" wire:model.live='tanggal_pajak'
                                    class="form-control col date @error('tanggal_pajak') is-invalid @enderror"
                                    placeholder="Tanggal Pajak STNK"
                                    onchange="Livewire.dispatch('setDatePajak',{data:this.value})">
                                @error('tanggal_pajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Tanggal STNK</label>
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar-day"></i></span>
                                </div>
                                <input id="picker-tanggal-stnk" type="text"
                                    wire:model.live='tanggal_stnk'class="form-control col date @error('tanggal_stnk') is-invalid @enderror"
                                    placeholder="Tanggal jatuh tempo STNK"
                                    onchange="Livewire.dispatch('setDateStnk',{data:this.value})">
                                @error('tanggal_stnk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="/master/kendaraan" wire:navigate type="button" class="btn btn-default">Close</a>
                <button type="button" wire:click='updateCar' class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
