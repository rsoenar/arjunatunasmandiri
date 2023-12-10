<div>
    {{-- Modal Create --}}
    <div wire:ignore.self class="modal fade" style="width: 100%" id="car-modal-input">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form master kendaraan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Nama Kendaraan</label>
                                <div class="input-group mb-3 ml-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text "><i class="fa fa-car"></i></span>
                                    </div>
                                    <input type="text" wire:model="nama"
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
                            <div class="form-group">
                                <label class="col-form-label">Transmisi</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Warna</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Nomor Polisi</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Nomor Rangka</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Nomor Mesin</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Foto Kendaraan</label>
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
                        </div>

                        <div class="col-md-6">
                         
                            <div class="form-group">
                                <label class="col-form-label">Tanggal Pajak</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Tanggal STNK</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Pemilik</label>
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
                            <div class="form-group">
                                <label class="col-form-label">Keterangan</label>
                                <div class="input-group mb-3 ml-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text "><i class="fa fa-file"></i></span>
                                    </div>
                                    <textarea class="form-control col" wire:model.defer='keterangan' rows="1" cols="4"
                                        placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="row" wire:loading.delay>
                                Loading...
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3 ml-6">
                                    @if ($photo)
                                        <img class="img-thumbnail" style="width: 180px; height: 160px; margin:auto;"
                                            src="{{ $photo->temporaryURL() }}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" wire:click='store' class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- Modal edit --}}
    <div wire:ignore.self class="modal fade" style="width: 100%" id="car-modal-edit">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form edit kendaraan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-form-label">Nama Kendaraan</label>
                                    <div class="input-group mb-3 ml-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text "><i class="fa fa-car"></i></span>
                                        </div>
                                        <input type="text" wire:model="nama"
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
                                <div class="form-group">
                                    <label class="col-form-label">Transmisi</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Warna</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Nomor Polisi</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Nomor Rangka</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Nomor Mesin</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Foto Kendaraan</label>
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Bahan Bakar</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Tahun Produksi</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Tanggal Pajak</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Tanggal STNK</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Pemilik</label>
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
                                <div class="form-group">
                                    <label class="col-form-label">Keterangan</label>
                                    <div class="input-group mb-3 ml-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text "><i class="fa fa-file"></i></span>
                                        </div>
                                        <textarea class="form-control col" wire:model.defer='keterangan' rows="1" cols="4"
                                            placeholder="Keterangan"></textarea>
                                    </div>
                                </div>
                                <div class="row" wire:loading.delay>
                                    Loading...
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3 ml-6">
                                        @if ($photo)
                                            <img class="img-thumbnail"
                                                style="width: 180px; height: 160px; margin:auto;"
                                                src="{{ $photo->temporaryURL() }}" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" wire:click='update' class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@push('script')
    <script>
        Livewire.on('success', data => {
            toastr["success"](data.pesan, "Notification")
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        })
    </script>
@endpush
