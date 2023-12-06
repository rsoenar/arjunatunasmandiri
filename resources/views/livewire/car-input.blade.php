<div wire:ignore.self class="row">
    <div class="col-xl-8 offset-xl-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Form input kendaraan</h3>
            </div>
            <div class="card-body">
                <h5>
                    Isi sesuai dengan field yang sudah disediakan lalu klik submit !!
                </h5>
                <hr class="hr pb-3" />
                <form wire:submit.prevent='store'>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kendaraan</label>
                        <div class="col-xl-5 col-md-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-car"></i></span>
                                </div>
                                <input type="text" wire:model="nama"
                                    class="form-control col @error('nama') is-invalid @enderror"
                                    placeholder="Merk Kendaraan">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Merk Kendaraan</label>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-copyright"></i></span>
                                </div>
                                <input type="text" wire:model='merk'
                                    class="form-control col @error('merk') is-invalid @enderror"
                                    placeholder="Merk Kendaraan">
                                @error('merk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Transmisi</label>
                        <div class="col-xl-4 col-md-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-cog"></i></span>
                                </div>
                                <select class="form-control" wire:model='jenis'>
                                    <option value="manual" selected>Transmisi</option>
                                    <option value="manual">Manual</option>
                                    <option value="automatic">Automatic</option>
                                    <option value="electric">Electric</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Warna</label>
                        <div class="col-xl-7 col-md-6 col-xs-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-brush"></i></span>
                                </div>
                                <input type="text" wire:model='warna'
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
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Polisi</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-hashtag"></i></span>
                                </div>
                                <input type="text" wire:model='nopol'
                                    class="form-control col @error('nopol') is-invalid @enderror"
                                    placeholder="Nomor Polisi">
                                @error('nopol')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Rangka</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-fingerprint"></i></span>
                                </div>
                                <input type="text" wire:model='norangka'
                                    class="form-control col @error('norangka') is-invalid @enderror"
                                    placeholder="Nomor Rangka">
                                @error('norangka')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Mesin</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-car-battery"></i></span>
                                </div>
                                <input type="text" wire:model='nomesin'
                                    class="form-control col @error('nomesin') is-invalid @enderror"
                                    placeholder="Nomor Mesin">
                                @error('nomesin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Bahan Bakar</label>
                        <div class="col-xl-4 col-md-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-oil-can"></i></span>
                                </div>
                                <select class="form-control" wire:model='bbm'>
                                    <option value="premium" selected>Bahan bakar</option>
                                    <option value="premium">Premium</option>
                                    <option value="pertamax">Pertamax</option>
                                    <option value="solar">Solar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tahun Produksi</label>
                        <div class="col-xl-5 col-md-3">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                </div>
                                <select class="form-control" wire:model='tahunprod'>
                                    <option value="2012" selected>Tahun produksi</option>
                                    {{ $last = date('Y') - 12 }}
                                    {{ $now = date('Y') }}
                                    @for ($i = $now; $i >= $last; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Tanggal Pajak</label>
                        <div class="col-xl-6 col-md-3">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar-week"></i></span>
                                </div>
                                <input id="picker-pajak" type="text" wire:model='tglPajak'
                                    class="form-control col date @error('tglPajak') is-invalid @enderror"
                                    placeholder="Tanggal Pajak STNK" onchange="Livewire.emit('setDate',this.value)">
                                @error('tglPajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal STNK</label>
                        <div class="col-xl-6 col-md-3">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar-day"></i></span>
                                </div>
                                <input id="picker-tanggal-stnk" type="text"
                                    wire:model='tglStnk'class="form-control col date @error('tglStnk') is-invalid @enderror"
                                    placeholder="Tanggal jatuh tempo STNK"
                                    onchange="Livewire.emit('setDate',this.value)">
                                @error('tglStnk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pemilik</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" wire:model='owner'
                                    class="form-control col @error('tglStnk') is-invalid @enderror"
                                    placeholder="Nama pemilik">
                                @error('owner')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-xl-8 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-file"></i></span>
                                </div>
                                <textarea class="form-control" wire:model.defer='keterangan' rows="2" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Photo Kendaraan</label>
                        <div class="col-xl-8 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-image"></i></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" wire:model='photo' class="form-control">
                                    {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                                </div>
                                @if ($photo)
                                    <img class="img-fluid img-thumbnail rounded" src="{{ $photo->temporaryURL() }}"
                                        alt="">
                                @endif
                                <div class="rounded">

                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            </form>
            <div class="card-footer">
                <button type="submit" wire:click='store' class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
