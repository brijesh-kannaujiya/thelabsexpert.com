@extends('admin.common.app')

@section('title')
    {{ __('Specimens') }}
@endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-tasks"></i>
                        {{ __('Specimens') }}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Specimen') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                {{ __('Specimens') }}
            </h3>
            @can('create_specimen')
                <a href="{{ route('admin.specimens.create') }}" class="btn btn-primary btn-sm float-right">
                    <i class="fa fa-plus"></i> {{ __('Create') }}
                </a>
            @endcan
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-lg-12 table-responsive">
                <table id="specimen_table" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th width="10px">
                                <input type="checkbox" class="check_all" name="" id="">
                            </th>
                            <th width="10px">#</th>
                            <th>{{ __('Name') }}</th>
                            <th width="100px">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@section('scripts')
    <script>
        var can_delete =
            @can('delete_specimen')
                true
            @else
                false
            @endcan
    </script>
    <script src="{{ asset('js/admin/specimens.js') }}"></script>
    <script src="{{ asset('js/admin/bulk_action.js') }}"></script>
@endsection
