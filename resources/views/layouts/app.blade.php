<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', env('APP_NAME'))">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="icon" href="{{asset('assets/dist/img/img_1.png')}}" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('assets/dist/css/custom.css') }}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/customBack.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <div class="loading d-none" id="loader">Loading&#8230;</div>
    @include('includes.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper p-2">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('includes.message')
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('includes.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--end::Custom Javascript-->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@yield('scripts')
<!--end::Javascript-->
</body>
</html>
