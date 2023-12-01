<div>
    <div class="card">
        <div class="card-header col card-header text-left">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-master-biaya">
                Tambah Data
            </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (session()->has('message'))
                <h5 class="alert alert-success">{{ session('message') }}</h5>
            @endif
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
                            <td>{{ $cost->id }}</td>
                            <td>{{ $cost->nama }}</td>
                            <td style="width:1px; white-space:nowrap;">
                                <a role="button" class="btn btn-primary btn-xs" href="#">Edit</a>
                                <a role="button" class="btn btn-danger btn-xs" href="#">Delete</a>
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
