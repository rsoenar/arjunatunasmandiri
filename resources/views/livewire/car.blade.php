<div class="card">
    <div class="card-header col card-header text-left">
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <a href="{{ route('car-input') }} " wire:navigate class="btn btn-default">Tambah Data</a>
            </div>
            <div class="col-md-6 col-xl-6 d-flex justify-content-end">
                <div class="row gap-0">
                    <div class="col-xl-12 col-md-12">
                        <input type="search" class="form-control form-control-md" wire:model.live="search"
                            placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-r esponsive" id="proTeamScroll" tabindex="2" outline: none;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Tahun Produksi</th>
                        <th>Identitas Fisik</th>
                        <th>Pemilik</th>
                        <th>Transmisi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cars as $car)
                        <tr wire:key={{ $car->id }}>
                            <td class="table-img"><img src="{{ URL::asset('storage/images-car/' . $car->photo) }}"
                                    alt="">
                            </td>
                            <td>
                                <h6 class="mb-0 font-13">{{ $car->nama }}</h6>
                                <p class="m-0 font-12">
                                    Warna <span class="col-green font-weight-bold"> {{ $car->warna }}</span>
                                </p>
                            </td>
                            <td>{{ $car->tahun_produksi }}</td>
                            <td class="text-truncate">
                                <h6 class="mb-0 font-13">{{ $car->no_mesin }}</h6>
                                <p class="m-0 font-12">
                                    <span class="col-green font-weight-bold">
                                        {{ $car->no_rangka }}</span>
                                </p>
                            </td>
                            <td>
                                <div class="badge-outline col-red">{{ $car->pemilik }}</div>
                            </td>
                            <td class="align-middle">
                                {{-- <div class="progress-text">50%</div>
                                    <div class="progress" data-height="6" style="height: 6px;">
                                        <div class="progress-bar bg-success" data-width="50%" style="width: 50%;"></div>
                                    </div> --}}
                                {{ $car->transmisi }}
                            </td>
                            <td>
                                @if ($car->status == 1)
                                    <span class="badge bg-success">Tersedia</span>
                                @elseif($car->status == 2)
                                    <span class="badge bg-warning">Service</span>
                                @else
                                    <span class="badge bg-danger">Terorder</span>
                                @endif
                            </td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)"
                                    wire:click.prevent='DeleteConfirmation({{ $car->id }})'>Delete</a>
                                <a type="button" role="button" class="btn btn-warning btn-xs"
                                    href="{{ route('car-edit', $car->id) }}" wire:navigate>Edit</a>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Not Found Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            {{ $cars->links() }}
        </ul>
    </div>
</div>

@push('script')
    <script>
        Livewire.on('show-delete-confirm', data => {
            Swal.fire({
                title: "Anda yakin?",
                text: "Data tidak dapat dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya Delete !"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('DeleteConfirmed')
                }
            })
        });
    </script>
@endpush

@push('script')
    <script>
        Livewire.on('CarDeleted', data => {
            Swal.fire({
                title: "Deleted!",
                text: "Data anda berhasil didelete",
                icon: "success"
            });
        })
    </script>
@endpush
