<div class="row">
    <div class="col-xl-8 offset-xl-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Form input kendaraan</h3>
            </div>
            <div class="card-body">
                <h5>
                    Please fill out the following form and click the Simpan button.
                </h5>
                <hr class="hr pb-4" />
                <div class="form-group row ml-1 mb-1">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kendaraan</label>
                    <div class="col-xl-5 col-md-6">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-car"></i></span>
                            </div>
                            <input type="text" class="form-control col" placeholder="Merk Kendaraan">
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
                            <input type="text" class="form-control col" placeholder="Merk Kendaraan">
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
                            <select class="form-control">
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
                    <div class="col-xl-5 col-md-6">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-brush"></i></span>
                            </div>
                            <input type="text" class="form-control col" placeholder="Warna kendaraan sesuai STNK">
                        </div>
                    </div>
                </div>
                <div class="form-group row ml-1 mb-1">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Polisi</label>
                    <div class="col-xl-4 col-md-4">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-hashtag"></i></span>
                            </div>
                            <input type="text" class="form-control col" placeholder="Nomor Polisi sesuai STNK">
                        </div>
                    </div>
                </div>
                <div class="form-group row ml-1 mb-1">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Rangka</label>
                    <div class="col-xl-4 col-md-4">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-fingerprint"></i></span>
                            </div>
                            <input type="text" class="form-control col" placeholder="Nomor Rangka sesuai STNK">
                        </div>
                    </div>
                </div>
                <div class="form-group row ml-1 mb-1">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Mesin</label>
                    <div class="col-xl-4 col-md-4">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-car-battery"></i></span>
                            </div>
                            <input type="text" class="form-control col" placeholder="Nomor Mesin sesuai STNK">
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
                            <select class="form-control">
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
                    <div class="col-xl-3 col-md-3">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                            </div>
                            <select class="form-control">
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
                    <div class="col-xl-4 col-md-3">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-calendar-week"></i></span>
                            </div>
                            <input id="picker-tanggal-pajak" type="text" class="form-control col date"
                                placeholder="Tanggal jatuh tempo pajak sesuai STNK">
                        </div>
                    </div>

                </div>
                <div class="form-group row ml-1 mb-1">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal STNK</label>
                    <div class="col-xl-3 col-md-3">
                        <div class="input-group mb-3 ml-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                            </div>
                            <select class="form-control">
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
            </div>
        </div>
    </div>
</div>

@push('script')
@endpush
