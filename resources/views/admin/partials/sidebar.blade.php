<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        {{-- <img src="{{asset('public/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image elevation-3"> --}}
        {{-- <span class="brand-text font-weight-light">{{$info['name']}}</span> --}}
    </a>
    <!-- \Brand Logo -->

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- @if(auth()->guard('admin')->check())
                <img src="@if(!empty(auth()->guard('admin')->user()->avatar)){{asset('public/uploads/user-avatar/'.auth()->guard('admin')->user()->avatar)}}@else {{asset('public/img/avatar.png')}} @endif" class="img-circle elevation-2" alt="Avatar">
                @else
                <img src="@if(!empty(auth()->guard('patient')->user()->avatar)){{asset('public/uploads/patient-avatar/'.auth()->guard('patient')->user()->avatar)}}@else {{asset('public/img/avatar.png')}} @endif" class="img-circle elevation-2" alt="Avatar">
                @endif --}}

                <img src="{{asset('public/img/avatar.png')}}" class="img-circle elevation-2" alt="Avatar">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{-- @if(Auth::guard('admin')->check())
                    {{Auth::guard('admin')->user()->name}}
                    @else
                    {{Auth::guard('patient')->user()->name}}<br>
                    {{__('Code')}}: {{Auth::guard('patient')->user()->code}}
                    @endif --}}
                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <!-- Admin sidebar -->
        {{-- @can('admin') --}}
        @include('admin.partials.admin_sidebar')
        <!-- \Admin sidebar -->
        <!-- Patient sidebar -->
        {{-- @else
        @include('partials.patient_sidebar')
        @endcan --}}
        <!-- \Patient sidebar -->
        <!-- /.sidebar-menu -->
    </div>
</aside>
<!-- /.sidebar -->
