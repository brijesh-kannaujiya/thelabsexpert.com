@extends('admin.common.app')

@section('title')
    {{ __('Booking') }}
@endsection

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        {{ __('Booking') }}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Groups') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{ __('Booking Table') }}</h3>
            @can('create_booking')
                <a href="{{ route('admin.booking.create') }}" class="btn btn-primary btn-sm float-right">
                    <i class="fa fa-plus"></i> {{ __('Create') }}
                </a>
            @endcan
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- filter -->

            <!-- \filter -->
            <div class="row">
                <div class="col-lg-12 table-responsive">
                    <table id="groups_table" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>

                                <th width="10px">#</th>
                                <th>{{ __('Sample / Phlebo Status') }}</th>
                                <th>{{ __('reportDataTime') }}</th>
                                <th width="10px">{{ __('Name') }}</th>
                                <th width="10px">{{ __('Contacts/Emails') }}</th>
                                {{-- <th width="100px">{{__('Patient Code')}}</th> --}}
                                {{-- <th width="150px">{{__('Patient Name')}}</th> --}}
                                {{-- <th>{{__('Contract')}}</th> --}}
                                {{-- <th width="100px">{{__('Subtotal')}}</th> --}}
                                {{-- <th width="100px">{{__('Discount')}}</th> --}}
                                <th width="100px">{{ __('Total') }}</th>
                                <th width="100px">{{ __('Due') }}</th>
                                <th width="100px">{{ __('Payment') }}</th>
                                <th width="100px">{{ __('Barcode') }}</th>
                                <th width="100px">{{ __('Update Info') }}</th>
                                {{-- <th width="100px">{{__('Date')}}</th>
                            <th width="10px">{{__('Status')}}</th>
                            <th width="50px">{{__('Action')}}</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    {{-- @include('admin.groups.modals.print_barcode') --}}
@endsection
@section('scripts')
    <script>
        var can_delete =
            @can('delete_booking')
                true
            @else
                false
            @endcan ;
        var can_view =
            @can('view_booking')
                true
            @else
                false
            @endcan ;
    </script>
    <script src="{{ asset('js/admin/booking.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <script src="{{ asset('js/admin/bulk_action.js') }}"></script>
@endsection
