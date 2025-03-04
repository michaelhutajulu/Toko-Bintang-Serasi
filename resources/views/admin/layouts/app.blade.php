<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SDS FILADELFIA TARUTUNG</title>

    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}" type="image/*">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/Admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/Admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- SweetAler2 -->
    <link rel="stylesheet" href="{{ asset('/Admin/plugins/sweetalert2/sweetalert2.min.css') }}">
    @stack('css_vendor')

    <!-- Theme style -->
    {{--  <link rel="stylesheet" href="{{ asset('/Admin/dist/css/Admin.min.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('Admin/dist/css/Admin.min.css?v=3.2.0') }}">

    <style>
        .note-editor {
            margin-bottom: 0;
        }

        .note-editor.is-invalid {
            border-color: var(--danger);
        }

        .nav-sidebar .nav-header {
            font-size: .6rem;
            font-weight: bold;
            color: #888;
        }
    </style>

    @stack('css')
</head>

<body class="sidebar-mini layout-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/Admin/dist/img/logoo.jpeg') }}" alt="AdminLogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        @includeIf('admin.layouts.partials.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @includeIf('admin.layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        @includeIf('layouts.partials.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/Admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/Admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/Admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/Admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/Admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('/Admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/Admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/Admin/plugins/moment/moment.min.js') }}"></script>

    <!-- overlayScrollbars -->
    <script src="{{ asset('/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- sweetalert2 -->
    <script src="{{ asset('/Admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    @stack('scripts_vendor')

    <!-- Admin App -->
    <script src="{{ asset('Admin/dist/js/Admin.js?v=3.2.0') }}"></script>
    <script src="{{ asset('Admin/dist/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('/js/custom.js') }}"></script>

    <x-toast />
    @stack('scripts')
</body>

</html>
