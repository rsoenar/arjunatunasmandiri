@extends('layouts.main')

@section('main-content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Master Supir</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Master Supir</li>
                        <li class="breadcrumb-item active">Supir Baru</li>
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
                    @livewire('driver-input')
                </div>
            </div>
        </div>
    </section>
@endsection
