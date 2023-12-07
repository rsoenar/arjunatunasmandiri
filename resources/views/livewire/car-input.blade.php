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
                        <label class="col-sm-3 col-form-label">Nama Kendaraan</label>
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
                        <label class="col-sm-3 col-form-label">Merk Kendaraan</label>
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
                        <label class="col-sm-3 col-form-label">Jenis Transmisi</label>
                        <div class="col-xl-4 col-md-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-cog"></i></span>
                                </div>
                                <select class="form-control" wire:model='transmisi'>
                                    <option value="manual" selected>Transmisi</option>
                                    <option value="manual">Manual</option>
                                    <option value="automatic">Automatic</option>
                                    <option value="electric">Electric</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Warna</label>
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
                        <label class="col-sm-3 col-form-label">Nomor Polisi</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-hashtag"></i></span>
                                </div>
                                <input type="text" wire:model='no_pol'
                                    class="form-control col @error('no_pol') is-invalid @enderror"
                                    placeholder="Nomor Polisi">
                                @error('no_pol')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Nomor Rangka</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-fingerprint"></i></span>
                                </div>
                                <input type="text" wire:model='no_rangka'
                                    class="form-control col @error('no_rangka') is-invalid @enderror"
                                    placeholder="Nomor Rangka">
                                @error('no_rangka')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Nomor Mesin</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-car-battery"></i></span>
                                </div>
                                <input type="text" wire:model='no_mesin'
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
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Bahan Bakar</label>
                        <div class="col-xl-4 col-md-6">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-oil-can"></i></span>
                                </div>
                                <select class="form-control" wire:model='bahan_bakar'>
                                    <option value="premium" selected>Bahan bakar</option>
                                    <option value="premium">Premium</option>
                                    <option value="pertamax">Pertamax</option>
                                    <option value="solar">Solar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Tahun Produksi</label>
                        <div class="col-xl-5 col-md-3">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                </div>
                                <select class="form-control" wire:model='tahun_produksi'>
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
                                <input id="picker-pajak" type="text" wire:model='tanggal_pajak'
                                    class="form-control col date @error('tanggal_pajak') is-invalid @enderror"
                                    placeholder="Tanggal Pajak STNK"
                                    onchange="Livewire.emit('setDatePajak',this.value)">
                                @error('tanggal_pajak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Tanggal STNK</label>
                        <div class="col-xl-6 col-md-3">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-calendar-day"></i></span>
                                </div>
                                <input id="picker-tanggal-stnk" type="text"
                                    wire:model='tanggal_stnk'class="form-control col date @error('tanggal_stnk') is-invalid @enderror"
                                    placeholder="Tanggal jatuh tempo STNK"
                                    onchange="Livewire.emit('setDateStnk',this.value)">
                                @error('tanggal_stnk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Nama Pemilik</label>
                        <div class="col-xl-6 col-md-4">
                            <div class="input-group mb-3 ml-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text "><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" wire:model='pemilik'
                                    class="form-control col @error('pemilik') is-invalid @enderror"
                                    placeholder="Nama pemilik">
                                @error('pemilik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ml-1 mb-1">
                        <label class="col-sm-3 col-form-label">Keterangan</label>
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

                            </div>
                            <div class="row" wire:loading.delay>
                                <div="col-xl-2">
                                Loading...
                            </div>
                            <div class="row">
                                @if ($photo)
                                    <hr class="hr" />
                                    <img class="img-thumbnail" style="width: 164px; height: 164px; margin:auto;"
                                        src="{{ $photo->temporaryURL() }}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" wire:click='store' class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('success', data => {
            toastr["success"](data.pesan, "Notification")
            toastr.options = {
                "closeDuration": 2000,
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                onHidden: function() {
                    window.location.href = '/master/kendaraan';
                }
            }
        })
    </script>
@endpush
