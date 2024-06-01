<!DOCTYPE html>
<html>
<head>
    @include('admin.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm sidebar-collapse">
    <div class="preloader">
    </div>
    {{-- <div class="loader">
    
  </div> --}}
    {{-- <img src="{{url('img/'.$info['preloader'])}}" class="loader" alt=""> --}}
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.partials.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('breadcrumb')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @include('admin.partials.validation_errors')
                    @yield('content')
                    <input type="hidden" id="system_currency" value="{{cache('currency')}}">
                    <input type="hidden" id="system_date" value="{{date('Y-m-d')}}">
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('admin.partials.footer')
        <!-- /.Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

    </div>
    <!-- ./wrapper -->

    @include('admin.partials.scripts')

</body>
</html>
