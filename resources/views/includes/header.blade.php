<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

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
    <div class="p-2 pt-3 text-center brand-wrapper">
        <a href="#" class="brand-img-container"><img src="{{asset('assets/dist/img/img.png')}}" alt="AdminLTE Logo" class="img-fluid">
    </a>
</div>

    <!-- Sidebar -->
    <div class="sidebar esSidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
{{--                @if(auth()->user()->hasPermission('list_express_service'))--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('admin.express_service.index')}}" class="nav-link {{ route('admin.express_service.index') == url()->current() ? 'active': ''}}">--}}
{{--                        <i class="nav-icon fas fa-biking"></i>--}}
{{--                        <p>Express Service</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endif--}}
                <li class="nav-item">
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-logout nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </button>
                    </form>

                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
