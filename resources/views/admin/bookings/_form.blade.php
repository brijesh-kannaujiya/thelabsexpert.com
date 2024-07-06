<!-- Patient Info -->


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            {{__('Patient Info')}}
        </h3>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Contact (Primary)')}}</label>
                    <input type="number" class="form-control" id="phone" onkeyup="getPhoneNo()" name="phone" value="{{ old('phone') }}" required="required">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__("Patient's Full Name")}}</label>

                    <input type="text" class="form-control" id="name" name="name" required="required" value="{{ old('name') }}">


                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Gender')}}</label>
                    <select class="form-control select2" required="required" name="gender" id="gender">
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Age')}}</label>
                    <input type="number" class="form-control" id="age" required="required" name="age" value="{{ old('age') }}">

                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Contact (Secondary)')}}</label>
                    <input type="number" class="form-control" id="phone_secondary" name="phone_secondary" value="{{ old('phone_secondary') }}">

                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Email (Primary)')}}</label>
                    <input class="form-control" id="email" name="email" required="required" value="{{ old('email') }}">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Email (Secondary)')}}</label>
                    <input class="form-control" id="email_secondary" name="email_secondary" value="{{ old('email_secondary')}}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Area')}}</label>
                    <input class="form-control" id="area" required="required" name="area" value="{{ old('area') }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group ">
                    <label>{{__('City')}}</label>
                    <select name="city" id="city" required="required" class="form-control select2">
                        <option data-select2-id="11">Select City</option>
                        <option value="Greater Noida"> Greater Noida </option>
                        <option value="Greater Noida West"> Greater Noida West </option>
                        <option value="Sirhind">Sirhind</option>
                        <option value="Noida">Noida</option>
                        <option value="Faridabad">Faridabad</option>
                        <option value="Shahdara">Shahdara</option>
                        <option value="Gurugram">Gurugram</option>
                        <option value="Patiala">Patiala</option>
                        <option value="Rajpura">Rajpura</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Mohali">Mohali</option>
                        <option value="Panchkula">Panchkula</option>
                        <option value="Kharar">Kharar</option>
                        <option value="Zirakpur">Zirakpur</option>
                        <option value="Ambala">Ambala</option>
                        <option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
                        <option value="Patran">Patran</option>
                        <option value="Samana">Samana</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Ludhiana">Ludhiana</option>
                        <option value="Amritsar">Amritsar</option>
                        <option value="Jalandhar">Jalandhar</option>
                        <option value="Phagwara">Phagwara</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Panipat">Panipat</option>
                        <option value="Sonipat">Sonipat</option>
                        <option value="Meerut">Meerut</option>
                        <option value="Nabha">Nabha</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Bulandshahr">Bulandshahr</option>
                        <option value="Dera Bassi">Dera Bassi</option>
                        <option value="Manimajra">Manimajra</option>
                        <option value="Sangrur">Sangrur</option>
                        <option value="Thane">Thane</option>
                        <option value="Hapur">Hapur</option>
                        <option value="Pinjore">Pinjore</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Parwanoo">Parwanoo</option>
                        <option value="Banur">Banur</option>
                        <option value="Bahadurgarh">Bahadurgarh</option>
                        <option value="Palwal">Palwal</option>
                        <option value="Sikandrabad">Sikandrabad</option>
                        <option value="Bhawanigarh">Bhawanigarh</option>
                        <option value="Ballabhgarh">Ballabhgarh</option>
                        <option value="Greater Noida Camp">Greater Noida Camp</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Mathura">Mathura</option>
                        <option value="Vrindavan">Vrindavan</option>
                        <option value="Barsana">Barsana</option>
                        <option value="Ghaziabad">Ghaziabad</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Address')}}</label>
                    <input class="form-control" id="address" required="required" name="address" value="{{ old('address') }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Pincode')}}</label>
                    <input type="number" class="form-control" required="required" id="pincode" name="pincode" value="{{ old('pincode') }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Aadhar No.')}}</label>
                    <input class="form-control" id="aadhar_number" name="aadhar_number" value="{{ old('aadhar_number') }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Passport No.')}}</label>
                    <input class="form-control" id="passport_number" name="passport_number" value="{{ old('passport_number') }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Comment')}}</label>
                    <input class="form-control" id="comment" name="comment" value="{{ old('comment') }}">

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Phlebo Comment')}}</label>
                    <input class="form-control" id="phlebo_comment" name="phlebo_comment" value="{{ old('phlebo_comment') }}">

                </div>
            </div>
            <div class=" col-md-3">
                <label for="icon">{{__('Prescriptions Upload')}}</label>
                <div class="custom-file">
                    <input type="file" name="prescriptions" accept="image/*" class="custom-file-input" id="prescriptions">
                    <label class="custom-file-label" for="prescriptions">{{__('Prescriptions Upload')}}</label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{__('Barcode')}}</label>
                    <input class="form-control" id="barcode" required="required" name="barcode" value="{{ old('barcode') }}">

                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" required="required" value="" name="date" id="date" aria-describedby="date" placeholder="Select Booking Date" onkeydown="return false" class="form-control">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="timeslot_from">Select from Time</label>
                    <select name="from_time" id="timeslot_from" required="required" aria-describedby="timeslot_from" placeholder="Select from Time" class="form-control select2" data-select2-id="timeslot_from" tabindex="-1" aria-hidden="true">
                        <option value="">Select From Time</option>
                        <option value="05:00 am">05:00 am</option>
                        <option value="05:30 am">05:30 am</option>
                        <option value="06:00 am">06:00 am</option>
                        <option value="06:30 am">06:30 am</option>
                        <option value="07:00 am">07:00 am</option>
                        <option value="07:30 am">07:30 am</option>
                        <option value="08:00 am">08:00 am</option>
                        <option value="08:30 am">08:30 am</option>
                        <option value="09:00 am">09:00 am</option>
                        <option value="09:30 am">09:30 am</option>
                        <option value="10:00 am">10:00 am</option>
                        <option value="10:30 am">10:30 am</option>
                        <option value="11:00 am">11:00 am</option>
                        <option value="11:30 am">11:30 am</option>
                        <option value="12:00 pm">12:00 pm</option>
                        <option value="12:30 pm">12:30 pm</option>
                        <option value="01:00 pm">01:00 pm</option>
                        <option value="01:30 pm">01:30 pm</option>
                        <option value="02:00 pm">02:00 pm</option>
                        <option value="02:30 pm">02:30 pm</option>
                        <option value="03:00 pm">03:00 pm</option>
                        <option value="03:30 pm">03:30 pm</option>
                        <option value="04:00 pm">04:00 pm</option>
                        <option value="04:30 pm">04:30 pm</option>
                        <option value="05:00 pm">05:00 pm</option>
                        <option value="05:30 pm">05:30 pm</option>
                        <option value="06:00 pm">06:00 pm</option>
                        <option value="06:30 pm">06:30 pm</option>
                        <option value="07:00 pm">07:00 pm</option>
                        <option value="07:30 pm">07:30 pm</option>
                        <option value="08:00 pm">08:00 pm</option>
                        <option value="08:30 pm">08:30 pm</option>
                        <option value="09:00 pm">09:00 pm</option>
                        <option value="09:30 pm">09:30 pm</option>
                        <option value="10:00 pm">10:00 pm</option>
                        <option value="10:30 pm">10:30 pm</option>
                        <option value="11:00 pm">11:00 pm</option>
                        <option value="11:30 pm">11:30 pm</option>
                    </select>
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="timeslot_to">Select to Time</label>
                    <select name="to_time" id="timeslot_to" required="required" aria-describedby="timeslot_from" placeholder="Select to Time" class="form-control select2" data-select2-id="timeslot_to" tabindex="-1" aria-hidden="true">
                        <option value="" data-select2-id="7">Select To Time</option>
                    </select>
                    <span class="text-danger"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- /patient info-->

    <!-- Tests -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-title">
                        {{__('Tests')}}
                    </h5>
                </div>
                <div class="card-header">
                    <select name="" id="select_test" class="form-control select2"></select>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50%">
                                    {{__('Name')}}
                                </th>
                                <th width="30%">
                                    {{__('Category')}}
                                </th>
                                <th>
                                    {{__('Price')}}
                                </th>
                                <th width="10px">
                                </th>
                            </tr>
                        </thead>
                        <tbody id="selected_tests">
                            @if(isset($group))
                            @foreach($group['tests'] as $test)
                            <tr class="selected_test" id="test_{{$test['test_id']}}" default_price="{{$test['test']['test_price']['price']}}">
                                <td>
                                    {{$test['test']['name']}}
                                    <input type="hidden" class="tests_id" name="tests[{{$test['test_id']}}][id]" value="{{$test['test_id']}}">
                                </td>
                                <td>
                                    {{$test['test']['category']['name']}}
                                </td>
                                <td class="test_price">
                                    {{$test['price']}}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm delete_selected_row">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                <input type="hidden" class="price" name="tests[{{$test['test_id']}}][price]" value="{{$test['price']}}">
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-lg-5">
            <!-- Receipt -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                        {{__('Receipt')}}
                    </h3>
                </div>
                <div class="card-body p-0" id="receipt">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table  table-stripped" id="receipt_table">
                                <tbody>

                                    <tr>
                                        <td width="100px">{{__('Subtotal')}}</td>
                                        <td width="300px">
                                            <input type="number" id="subtotal" name="subtotal" value="0" readonly class="form-control">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{__('Discount')}}</td>
                                        <td>
                                            <input type="number" class="form-control" id="discount" name="discount" value="0">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{__('Hardcopy')}}</td>
                                        <td>
                                            <input type="number" class="form-control" id="Hardcopy" name="hardcopy" value="0">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Logistics Charges')}}</td>
                                        <td>
                                            <input type="number" class="form-control" id="logistics_charges" name="logistics_charges" value="0">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td>{{__('Total')}}</td>
                                        <td>
                                            <input type="number" id="total" class="form-control" value="0" name="total" readonly>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Paid')}}</td>
                                        <td>
                                            <input type="number" id="paid" min="0" class="form-control" value="0" name="paid" readonly required>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{__('Due')}}</td>
                                        <td>
                                            <input type="number" id="due" class="form-control" value="0" name="due" readonly>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- \Receipt -->
        </div>
        <div class="col-lg-7">
            <!-- Payments -->
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="card-title">
                                {{__('Payments')}}
                            </h5>
                            {{-- <butto  --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-12">
                            <label for="icon">{{__('Payment Photo')}}</label>
                            <div class="custom-file">
                                <input type="file" name="payment_photo" accept="image/*" class="custom-file-input" id="payment_photo">
                                <label class="custom-file-label" for="payment_photo">{{__('Payment Photo')}}</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <label for="payment_amount">{{__('Amount')}}</label>
                            <input type="number" class="form-control amount" name="payment_amount" value="0" id="payment_amount" required>
                        </div>
                        <div class=" col-md-12">
                            <label for="payment_method">{{__('Payment Method')}}</label>
                            <select name="payment_method_id" id="payment_method_id" class="form-control payment_method_id" required>
                                <option value="" selected>{{__('Select payment method')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--\Payments -->
        </div>

    </div>


    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <button type="submit" class="btn btn-primary form-control">{{__('Save')}}</button>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a href="{{route('admin.booking.index')}}" class="btn btn-danger form-control cancel_form">{{__('Cancel')}}</a>
        </div>
    </div>


    {{--
<script type="text/javascript">
    $('select#timeslot_from').on('select2:select', function(e) {

        let from = parseInt($(`option[value='${e.params.data.text.trim()}']`).attr('data-select2-id')) + 2;
        if (from > 98) {
            from = 98;
        }
        let to = $(`option[data-select2-id='${from}']`).val();
        $('select#timeslot_to').val(to).trigger('change');

    });
    $('select#timeslot_froms').on('select2:select', function(e) {
        //managetimeslotcheck();
        //alert('dd');

    });

</script> --}}
