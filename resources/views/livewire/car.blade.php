<div>
    {{-- card header --}}
    <div class="card">
        <div class="card-header col card-header text-left">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <a href="{{ route('car-input') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col-md-6 col-xl-6 d-flex justify-content-end">
                    <div class="row gap-0">
                        <div class="col-xl-12 col-md-12">
                            <input type="search" class="form-control form-control-md" wire:model="search"
                                placeholder="Search">
                        </div>
                        {{-- <div class="col-xl-5 col-md-5">
                            <select class="form-control" wire:model="status">
                                <option value="1">Status</option>
                                <option value="1">Terorder</option>
                                <option value="2">Service</option>
                                <option value="3">Tersedia</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- car body --}}
        <div class="row pt-4 mr-2 ml-2">
            @forelse($cars as $car)
                <div class="col-xl-2 col-md-2 col-sm-2 gap-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('img/not-found.png') }}" alt="{{ $car->photo }}">
                        <div class="card-body">
                            <div class="ribbon-wrapper ribbon-lg">
                                @if ($car->status == 1)
                                    <div class="ribbon bg-success text-lg">Tersedia</div>
                                @elseif($car->status == 2)
                                    <div class="ribbon bg-warning text-lg">Service</div>
                                @else
                                    <div class="ribbon bg-danger text-lg">Terorder</div>
                                @endif
                            </div>
                            <h5 class="card-title text-bold">{{ $car->nama }}</h5>
                            <p class="card-text">{{ $car->keterangan }}</p>
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $car->warna }}</td>
                            </tr>
                            <tr>
                                <th>Transmisi</th>
                                <td>{{ $car->transmisi }}</td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td>{{ $car->warna }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Polisi</th>
                                <td>{{ $car->no_pol }}</td>
                            </tr>
                            <tr>
                                <th>Bahan Bakar</th>
                                <td>{{ $car->bahan_bakar }}</td>
                            </tr>
                            <tr>
                                <th>Owner</th>
                                <td>{{ $car->pemilik }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Produksi</th>
                                <td>{{ $car->tahun_produksi }}</td>
                            </tr>
                        </table>
                        <hr class="hr pt-0" />
                        <div class="card-body pt-0">
                            <a href="#" class="card-link btn btn-primary">Detail</a>
                            <a href="#" class="card-link btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-xl-4 offset-xl-4 d-flex justify-content-center">
                    <img src="{{ url('img/not-found.png') }}" style="width: 180px;height: 180px;"
                        class="card-img-top pb-4">
                </div>
            @endforelse
        </div>
    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            {{ $cars->links() }}
        </ul>
    </div>
    {{-- end card body --}}
</div>

</div>
