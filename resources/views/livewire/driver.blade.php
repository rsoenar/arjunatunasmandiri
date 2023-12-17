<div class="card">
    <div class="card-header col card-header text-left">
        <div class="row align-items-right">
            <div class="col-md-6 col-xl-6">
                <a href="{{ route('driver-input') }}" class="btn btn-default">Tambah Data</a>
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
    <div class="card-body">
        <div class="table-responsive" id="proTeamScroll" tabindex="2"
            style="height: 400px; overflow: hidden; outline: none;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Identitas</th>
                        <th>Telepon</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($drivers as $driver)
                        <tr>
                            <td class="table-img"><img
                                    src="{{ URL::asset('storage/images-supir/' . $driver->photo_url) }}" alt="">
                            </td>
                            <td>{{ $driver->nama }}</td>
                            <td>
                                <h6 class="mb-0 font-13">{{ $driver->alamat }}</h6>
                                <p class="m-0 font-12">
                                    Kode Pos : <span class="col-green font-weight-bold">
                                        {{ $driver->kode_pos }}</span>
                                </p>
                            </td>
                            <td>{{ $driver->no_identitas }}</td>
                            <td>
                                <h6 class="mb-0 font-13">{{ $driver->telepon }}</h6>
                                <p class="m-0 font-12">
                                    <span class="col-green font-weight-bold">
                                        {{ $driver->email }}</span>
                                </p>
                            </td>
                            <td>
                                @if ($driver->status == 1)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-danger">Non Aktif</span>
                                @endif
                            </td>

                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)"
                                    wire:click.prevent='DeleteConfirmation({{ $driver->id }})'>Delete</a>
                                <a type="button" role="button" class="btn btn-warning btn-xs"
                                    href="{{ route('driver-edit', $driver->id) }}" wire:navigate>Edit</a>
                            </td>
                        </tr>
                    @empty
                </tbody>
                <tr>
                    <td colspan="7" class="text-center">Not Found Data</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            {{ $drivers->links() }}
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
        Livewire.on('DriverDeleted', data => {
            Swal.fire({
                title: "Deleted!",
                text: "Data anda berhasil didelete",
                icon: "success"
            });
        })
    </script>
@endpush
