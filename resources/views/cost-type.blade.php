@extends('layouts.main')

@section('main-content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Biaya</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Master Biaya</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @livewire('cost-type')
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#modal-master-biaya').modal('hide')
            $(this).find('#form-modal-biaya')[0].reset();
        })
    </script>
@endsection
