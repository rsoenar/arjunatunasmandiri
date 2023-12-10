@extends('layouts.main')

@section('main-content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Transaksi Service</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi Service</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr class="hr mt-2" />
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header col card-header text-left">
                            <div class="row">
                                <div class="col-md-6 col-xl-6">
                                    <button type="button" class="btn btn-default" data-toggle="modal"
                                        data-target="#modal-master-order">
                                        Tambah Data
                                    </button>
                                </div>
                                <div class="col-md-6 col-xl-6 d-flex justify-content-end">
                                    <div class="row gap-0">
                                        <div class="col-xl-12 col-md-7">
                                            <input type="search" class="form-control form-control-md" wire:model="search"
                                                placeholder="Search">
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
                                        <th>Kode Kendaraan</th>
                                        <th>Tanggal Service</th>
                                        <th>Nomor Bukti</th>
                                        <th>Expire Service</th>
                                        <th>Jenis Service</th>
                                        <th>Nama Bengkel</th>
                                        <th>Biaya</th>
                                        <th>Personil</th>
                                        <th>Status</th>
                                        <th style="width: 40px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @forelse ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->nama }}</td>
                                            <td style="width:1px; white-space:nowrap;">
                                                <a role="button" class="btn btn-danger btn-xs" href="javascript:void(0)"
                                                    wire:click.prevent='DeleteConfirmation({{ $order->id }})'>Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No Records Found</td>
                                        </tr>
                                    @endforelse --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{-- {{ $orders->links() }} --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
