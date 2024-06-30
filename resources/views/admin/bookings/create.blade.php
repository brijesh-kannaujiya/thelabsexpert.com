@extends('admin.common.app')

@section('title')
{{__('Create Booking')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    <i class="nav-icon fas fa-file-invoice-dollar"></i>
                    {{__('Invoices')}}
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('admin.booking.index')}}">{{__('Invoices')}}</a></li>
                    <li class="breadcrumb-item active">{{__('Create invoice')}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')

<!-- Form -->
<form action="{{route('admin.booking.store')}}" method="POST" id="group_form">
    @csrf
    @include('admin.bookings._form')
</form>
<!-- \Form -->

<!-- Models -->
@include('admin.bookings.modals.patient_modal')
@include('admin.bookings.modals.edit_patient_modal')
@include('admin.bookings.modals.doctor_modal')
@include('admin.bookings.modals.payment_method_modal')
<!--\Models-->


@endsection

@section('scripts')
<script>
    var test_arr = [];
    var culture_arr = [];
    var package_arr = [];

    (function($) {

        "use strict";

        @if(isset($visit))

        //selected tests
        @foreach($visit['tests'] as $test)
        test_arr.push('{{$test["testable_id"]}}');
        @endforeach





        @endif

    })(jQuery);

</script>
<script src="{{url('js/admin/groups.js')}}"></script>
<script>
    (function($) {
        "use strict";

        @if(isset($visit) && isset($visit['patient']))
        $('#code').append('<option value="{{$visit["patient_id"]}}" selected>{{$visit["patient"]["code"]}}</option>');
        $('#code').trigger({
            type: 'select2:select'
            , params: {
                data: {
                    id: "{{$visit['patient_id']}}"
                    , text: "{{$visit['patient']['code']}}"
                }
            }
        });
        @endif
    })(jQuery);

</script>
@endsection
