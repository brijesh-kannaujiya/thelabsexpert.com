@extends('admin.common.app')

@section('title')
    {{ __('Create Parameter') }}
@endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-tasks"></i>
                        {{ __('Parameter') }}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.parameters.index') }}">{{ __('Parameter') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Create Parameter') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Create Parameter') }}</h3>
        </div>
        <!-- /.card-header -->
        <form method="POST" action="{{ route('admin.parameters.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-lg-12">
                    @include('admin.parameters._form')
                </div>
            </div>
            <div class="card-footer">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check"></i> {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>

        <!-- /.card-body -->
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/admin/parameters.js') }}"></script>
@endsection
