<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PT. Arjuna Tunas Mandiri</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <!-- Offline fontface poppins-->
    <link rel="stylesheet" href={{ URL::asset('dist/css/fontface.css') }}>
    <!-- Optional CSS table for customer page-->
    <link rel="stylesheet" href={{ URL::asset('dist/css/table-cus.css') }}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ URL::asset('dist/css/adminlte.min.css') }}>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href={{ URL::asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}>
    <!-- Toastr -->
    <link rel="stylesheet" href={{ URL::asset('plugins/toastr/toastr.min.css') }}>
    {{-- datepicker --}}
    <link rel="stylesheet" href={{ URL::asset('dist/datepicker/jquery.datetimepicker.css') }} />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    {{-- <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" /> --}}
</head>

<body class="hold-transition sidebar-mini ">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href={{ url('/') }} class="brand-link">
                <img src="{{ URL::asset('img/Logo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light center"> PT. Arjuna</span>
            </a>

            <!-- Sidebar -->
            @include('sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->

            @livewireStyles
            @livewireScripts
            @yield('main-content')

            <!-- /.content -->
        </div>

        <!-- footer -->
        @include('footer')
        <!-- end footer -->

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src={{ URL::asset('plugins/jquery/jquery.min.js') }}></script>
    <!-- Bootstrap 4 -->
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}

    <script src={{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ URL::asset('dist/js/adminlte.min.js') }}></script>
    <script src={{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <!-- SweetAlert2 -->
    <script src={{ URL::asset('plugins/sweetalert2/sweetalert2.min.js') }}></script>
    <!-- Toastr -->
    <script src={{ URL::asset('plugins/toastr/toastr.min.js') }}></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src={{ URL::asset('dist/datepicker/jquery.datetimepicker.full.min.js') }}></script>
    <!-- bs-custom-file-input -->
    <script src={{ URL::asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}></script>
    <script>
        // $.widget.bridge('uibutton', $.ui.button)
        // picker on car input form
        jQuery('.date').datetimepicker({
            format: 'Y-m-d',
            formatDate: 'Y-m-d',
        }).on('change', function() {
            $('.date').datetimepicker('hide');
        });
    </script>
    <script>
        // $.widget.bridge('uibutton', $.ui.button)
        $(function() {
            bsCustomFileInput.init();
        })
    </script>

    @stack('script')

</body>

</html>
