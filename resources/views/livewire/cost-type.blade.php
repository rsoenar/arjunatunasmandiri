<div>
    <div class="card">
        <div class="card-header col card-header text-left">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-master-biaya">
                        Tambah Data
                    </button>
                </div>
                <div class="col-md-6 col-xl-6 d-flex justify-content-end">
                    <div class="row gap-0">
                        <div class="col-xl-7 col-md-7">
                            <input type="search" class="form-control form-control-md" wire:model="search"
                                placeholder="Search">
                        </div>
                        <div class="col-xl-5 col-md-5">
                            <select class="form-control">
                                <option value="1">asfasf</option>
                                <option value="1">sdfs</option>
                                <option value="1">fsdafs</option>
                                <option value="1">fsdf</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped nowrap dtr-inline" width: auto>
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama Biaya</th>
                        <th style="width: 40px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($costs as $cost)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cost->nama }}</td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)"
                                    wire:click.prevent='DeleteConfirmation({{ $cost->id }})'>Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No Records Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                {{ $costs->links() }}
            </ul>
        </div>
    </div>
    <x-cost-modal />
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
                    Livewire.emit('DeleteConfirmed')
                }
            })
        });
    </script>
@endpush

@push('script')
    <script>
        Livewire.on('CostDeleted', data => {
            Swal.fire({
                title: "Deleted!",
                text: "Data anda berhasil didelete",
                icon: "success"
            });
        })
    </script>
@endpush
