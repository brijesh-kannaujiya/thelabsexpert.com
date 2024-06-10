@extends('admin.common.app')

@section('title')
{{ __('Edit Specimen') }}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="fa fa-tasks"></i>
                    {{__('Specimens')}}
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{route('admin.specimens.index')}}">{{ __('Specimens') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __('Edit Specimen') }}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ __('Edit Specimen') }}</h3>
    </div>
    <!-- /.card-header -->
    <form method="POST" action="{{route('admin.specimens.update',$specimen['id'])}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="col-lg-12">
                @include('admin.specimen._form')
            </div>
        </div>
        <div class="card-footer">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check"></i> {{__('Save')}}
                </button>
            </div>
        </div>
    </form>

    <!-- /.card-body -->
</div>

@endsection
@section('scripts')
<script src="{{url('js/admin/specimens.js')}}"></script>
@endsection
