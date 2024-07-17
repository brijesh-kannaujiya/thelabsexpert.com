<!-- Patient Info -->


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            {{ __('Patient Info') }}
        </h3>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Contact (Primary)') }}</label>
                    <input type="number" class="form-control" id="phone" onkeyup="getPhoneNo()" name="phone"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->phone }}" @else value=" {{ old('phone') }}" @endif
                        required="required">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __("Patient's Full Name") }}</label>

                    <input type="text" class="form-control" id="name" name="name" required="required"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->name }}" @else value="{{ old('name') }}" @endif>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Gender') }}</label>
                    <select class="form-control select2" required="required" name="gender" id="gender">
                        <option value="Male"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->gender == 'Male') selected
                            @elseif(old('gender') == 'Male')
                            selected @endif>
                            Male</option>
                        <option value="Female"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->gender == 'Female') selected
                            @elseif(old('gender') == 'Female')
                            selected @endif>
                            Female</option>
                        <option value="Other"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->gender == 'Other') selected
                            @elseif(old('gender') == 'Other')
                            selected @endif>
                            Other</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Age') }}</label>
                    <input type="number" class="form-control" id="age" required="required" name="age"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->age }}"
                    @else
                    value="{{ old('age') }}" @endif>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Contact (Secondary)') }}</label>
                    <input type="number" class="form-control" id="phone_secondary" name="phone_secondary"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->phone_secondary }}"
                    @else
                    value="{{ old('phone_secondary') }}" @endif>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Email (Primary)') }}</label>
                    <input type="email" class="form-control" id="email" name="email" required="required"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->email }}"
                    @else
                    value="{{ old('email') }}" @endif>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Email (Secondary)') }}</label>
                    <input type="email" class="form-control" id="email_secondary" name="email_secondary"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->email_secondary }}"
                    @else
                    value="{{ old('email_secondary') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Area') }}</label>
                    <input type="text" class="form-control" id="area" name="area" required="required"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->area }}"
                    @else
                    value="{{ old('area') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group ">
                    <label>{{ __('City') }}</label>
                    <select name="city" id="city" required="required" class="form-control select2">
                        <option value="" data-select2-id="11">Select City</option>
                        <option value="Greater Noida"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Greater Noida') selected
                            @elseif(old('city') == 'Greater Noida')
                            selected @endif>
                            Greater Noida</option>
                        <option value="Greater Noida West"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Greater Noida West') selected
                            @elseif(old('city') == 'Greater Noida West')
                            selected @endif>
                            Greater Noida West</option>
                        <option value="Sirhind"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Sirhind') selected
                            @elseif(old('city') == 'Sirhind')
                            selected @endif>
                            Sirhind</option>
                        <option value="Noida"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Noida') selected
                            @elseif(old('city') == 'Noida')
                            selected @endif>
                            Noida</option>
                        <option value="Faridabad"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Faridabad') selected
                            @elseif(old('city') == 'Faridabad')
                            selected @endif>
                            Faridabad</option>
                        <option value="Shahdara"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Shahdara') selected
                            @elseif(old('city') == 'Shahdara')
                            selected @endif>
                            Shahdara</option>
                        <option value="Gurugram"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Gurugram') selected
                            @elseif(old('city') == 'Gurugram')
                            selected @endif>
                            Gurugram</option>
                        <option value="Patiala"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Patiala') selected
                            @elseif(old('city') == 'Patiala')
                            selected @endif>
                            Patiala</option>
                        <option value="Rajpura"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Rajpura') selected
                            @elseif(old('city') == 'Rajpura')
                            selected @endif>
                            Rajpura</option>
                        <option value="Chandigarh"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Chandigarh') selected
                            @elseif(old('city') == 'Chandigarh')
                            selected @endif>
                            Chandigarh</option>
                        <option value="Mohali"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Mohali') selected
                            @elseif(old('city') == 'Mohali')
                            selected @endif>
                            Mohali</option>
                        <option value="Panchkula"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Panchkula') selected
                            @elseif(old('city') == 'Panchkula')
                            selected @endif>
                            Panchkula</option>
                        <option value="Kharar"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Kharar') selected
                            @elseif(old('city') == 'Kharar')
                            selected @endif>
                            Kharar</option>
                        <option value="Zirakpur"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Zirakpur') selected
                            @elseif(old('city') == 'Zirakpur')
                            selected @endif>
                            Zirakpur</option>
                        <option value="Ambala"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Ambala') selected
                            @elseif(old('city') == 'Ambala')
                            selected @endif>
                            Ambala</option>
                        <option value="Fatehgarh Sahib"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Fatehgarh Sahib') selected
                            @elseif(old('city') == 'Fatehgarh Sahib')
                            selected @endif>
                            Fatehgarh Sahib</option>
                        <option value="Patran"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Patran') selected
                            @elseif(old('city') == 'Patran')
                            selected @endif>
                            Patran</option>
                        <option value="Samana"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Samana') selected
                            @elseif(old('city') == 'Samana')
                            selected @endif>
                            Samana</option>
                        <option value="Delhi"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Delhi') selected
                            @elseif(old('city') == 'Delhi')
                            selected @endif>
                            Delhi</option>
                        <option value="Ludhiana"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Ludhiana') selected
                            @elseif(old('city') == 'Ludhiana')
                            selected @endif>
                            Ludhiana</option>
                        <option value="Amritsar"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Amritsar') selected
                            @elseif(old('city') == 'Amritsar')
                            selected @endif>
                            Amritsar</option>
                        <option value="Jalandhar"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Jalandhar') selected
                            @elseif(old('city') == 'Jalandhar')
                            selected @endif>
                            Jalandhar</option>
                        <option value="Phagwara"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Phagwara') selected
                            @elseif(old('city') == 'Phagwara')
                            selected @endif>
                            Phagwara</option>
                        <option value="Jaipur"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Jaipur') selected
                            @elseif(old('city') == 'Jaipur')
                            selected @endif>
                            Jaipur</option>
                        <option value="Panipat"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Panipat') selected
                            @elseif(old('city') == 'Panipat')
                            selected @endif>
                            Panipat</option>
                        <option value="Sonipat"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Sonipat') selected
                            @elseif(old('city') == 'Sonipat')
                            selected @endif>
                            Sonipat</option>
                        <option value="Meerut"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Meerut') selected
                            @elseif(old('city') == 'Meerut')
                            selected @endif>
                            Meerut</option>
                        <option value="Nabha"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Nabha') selected
                            @elseif(old('city') == 'Nabha')
                            selected @endif>
                            Nabha</option>
                        <option value="Mumbai"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Mumbai') selected
                            @elseif(old('city') == 'Mumbai')
                            selected @endif>
                            Mumbai</option>
                        <option value="Pune"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Pune') selected
                            @elseif(old('city') == 'Pune')
                            selected @endif>
                            Pune</option>
                        <option value="Bulandshahr"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Bulandshahr') selected
                            @elseif(old('city') == 'Bulandshahr')
                            selected @endif>
                            Bulandshahr</option>
                        <option value="Dera Bassi"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Dera Bassi') selected
                            @elseif(old('city') == 'Dera Bassi')
                            selected @endif>
                            Dera Bassi</option>
                        <option value="Manimajra"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Manimajra') selected
                            @elseif(old('city') == 'Manimajra')
                            selected @endif>
                            Manimajra</option>
                        <option value="Sangrur"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Sangrur') selected
                            @elseif(old('city') == 'Sangrur')
                            selected @endif>
                            Sangrur</option>
                        <option value="Thane"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Thane') selected
                            @elseif(old('city') == 'Thane')
                            selected @endif>
                            Thane</option>
                        <option value="Hapur"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Hapur') selected
                            @elseif(old('city') == 'Hapur')
                            selected @endif>
                            Hapur</option>
                        <option value="Pinjore"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Pinjore') selected
                            @elseif(old('city') == 'Pinjore')
                            selected @endif>
                            Pinjore</option>
                        <option value="Bangalore"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Bangalore') selected
                            @elseif(old('city') == 'Bangalore')
                            selected @endif>
                            Bangalore</option>
                        <option value="Parwanoo"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Parwanoo') selected
                            @elseif(old('city') == 'Parwanoo')
                            selected @endif>
                            Parwanoo</option>
                        <option value="Banur"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Banur') selected
                            @elseif(old('city') == 'Banur')
                            selected @endif>
                            Banur</option>
                        <option value="Bahadurgarh"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Bahadurgarh') selected
                            @elseif(old('city') == 'Bahadurgarh')
                            selected @endif>
                            Bahadurgarh</option>
                        <option value="Palwal"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Palwal') selected
                            @elseif(old('city') == 'Palwal')
                            selected @endif>
                            Palwal</option>
                        <option value="Sikandrabad"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Sikandrabad') selected
                            @elseif(old('city') == 'Sikandrabad')
                            selected @endif>
                            Sikandrabad</option>
                        <option value="Bhawanigarh"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Bhawanigarh') selected
                            @elseif(old('city') == 'Bhawanigarh')
                            selected @endif>
                            Bhawanigarh</option>
                        <option value="Ballabhgarh"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Ballabhgarh') selected
                            @elseif(old('city') == 'Ballabhgarh')
                            selected @endif>
                            Ballabhgarh</option>
                        <option value="Greater Noida Camp"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Greater Noida Camp') selected
                            @elseif(old('city') == 'Greater Noida Camp')
                            selected @endif>
                            Greater Noida Camp</option>
                        <option value="Hyderabad"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Hyderabad') selected
                            @elseif(old('city') == 'Hyderabad')
                            selected @endif>
                            Hyderabad</option>
                        <option value="Mathura"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Mathura') selected
                            @elseif(old('city') == 'Mathura')
                            selected @endif>
                            Mathura</option>
                        <option value="Vrindavan"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Vrindavan') selected
                            @elseif(old('city') == 'Vrindavan')
                            selected @endif>
                            Vrindavan</option>
                        <option value="Barsana"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Barsana') selected
                            @elseif(old('city') == 'Barsana')
                            selected @endif>
                            Barsana</option>
                        <option value="Ghaziabad"
                            @if (isset($booking) && isset($booking->patient) && $booking->patient->city == 'Ghaziabad') selected
                            @elseif(old('city') == 'Ghaziabad')
                            selected @endif>
                            Ghaziabad</option>
                    </select>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Address') }}</label>
                    <input class="form-control" id="address" required="required" name="address"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->address }}"
                    @else
                    value="{{ old('address') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Pincode') }}</label>
                    <input type="number" class="form-control" required="required" id="pincode" name="pincode"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->pincode }}"
                    @else
                    value="{{ old('pincode') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Aadhar No.') }}</label>
                    <input class="form-control" id="aadhar_number" name="aadhar_number"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->aadhar_number }}"
                    @else
                    value="{{ old('aadhar_number') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Passport No.') }}</label>
                    <input class="form-control" id="passport_number" name="passport_number"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->passport_number }}"
                    @else
                    value="{{ old('passport_number') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Comment') }}</label>
                    <input class="form-control" id="comment" name="comment"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->comment }}"
                    @else
                    value="{{ old('comment') }}" @endif>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Phlebo Comment') }}</label>
                    <input class="form-control" id="phlebo_comment" name="phlebo_comment"
                        @if (isset($booking) && isset($booking->patient)) value="{{ $booking->patient->phlebo_comment }}"
                    @else
                    value="{{ old('phlebo_comment') }}" @endif>

                </div>
            </div>
            <div class=" col-md-3">
                <label for="icon">{{ __('Prescriptions Upload') }}</label>
                <div class="custom-file">
                    <input type="file" name="prescriptions" accept="image/*" class="custom-file-input"
                        id="prescriptions">
                    <label class="custom-file-label" for="prescriptions">{{ __('Prescriptions Upload') }}</label>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label>{{ __('Barcode') }}</label>
                    <input class="form-control" id="barcode" required="required" name="barcode"
                        @if (isset($booking) && isset($booking->barcode)) value="{{ $booking->barcode }}"
                    @else
                    value="{{ old('barcode') }}" @endif>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" required="required" name="date" id="date" aria-describedby="date"
                        placeholder="Select Booking Date" onkeydown="return false" class="form-control"
                        @if (isset($booking) && isset($booking->date)) value="{{ $booking->date }}"
                    @else
                    value="{{ old('date') }}" @endif>
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="timeslot_from">Select from Time</label>
                    <select name="from_time" id="timeslot_from" required="required" aria-describedby="timeslot_from"
                        placeholder="Select from Time" class="form-control select2" data-select2-id="timeslot_from"
                        tabindex="-1" aria-hidden="true">
                        <option value="">Select From Time</option>
                        <option value="05:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '05:00 am') selected @endif>05:00 am</option>
                        <option value="05:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '05:30 am') selected @endif>05:30 am</option>
                        <option value="06:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '06:00 am') selected @endif>06:00 am</option>
                        <option value="06:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '06:30 am') selected @endif>06:30 am</option>
                        <option value="07:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '07:00 am') selected @endif>07:00 am</option>
                        <option value="07:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '07:30 am') selected @endif>07:30 am</option>
                        <option value="08:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '08:00 am') selected @endif>08:00 am</option>
                        <option value="08:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '08:30 am') selected @endif>08:30 am</option>
                        <option value="09:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '09:00 am') selected @endif>09:00 am</option>
                        <option value="09:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '09:30 am') selected @endif>09:30 am</option>
                        <option value="10:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '10:00 am') selected @endif>10:00 am</option>
                        <option value="10:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '10:30 am') selected @endif>10:30 am</option>
                        <option value="11:00 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '11:00 am') selected @endif>11:00 am</option>
                        <option value="11:30 am" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '11:30 am') selected @endif>11:30 am</option>
                        <option value="12:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '12:00 pm') selected @endif>12:00 pm</option>
                        <option value="12:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '12:30 pm') selected @endif>12:30 pm</option>
                        <option value="01:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '01:00 pm') selected @endif>01:00 pm</option>
                        <option value="01:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '01:30 pm') selected @endif>01:30 pm</option>
                        <option value="02:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '02:00 pm') selected @endif>02:00 pm</option>
                        <option value="02:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '02:30 pm') selected @endif>02:30 pm</option>
                        <option value="03:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '03:00 pm') selected @endif>03:00 pm</option>
                        <option value="03:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '03:30 pm') selected @endif>03:30 pm</option>
                        <option value="04:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '04:00 pm') selected @endif>04:00 pm</option>
                        <option value="04:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '04:30 pm') selected @endif>04:30 pm</option>
                        <option value="05:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '05:00 pm') selected @endif>05:00 pm</option>
                        <option value="05:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '05:30 pm') selected @endif>05:30 pm</option>
                        <option value="06:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '06:00 pm') selected @endif>06:00 pm</option>
                        <option value="06:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '06:30 pm') selected @endif>06:30 pm</option>
                        <option value="07:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '07:00 pm') selected @endif>07:00 pm</option>
                        <option value="07:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '07:30 pm') selected @endif>07:30 pm</option>
                        <option value="08:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '08:00 pm') selected @endif>08:00 pm</option>
                        <option value="08:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '08:30 pm') selected @endif>08:30 pm
                        </option>
                        <option value="09:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '09:00 pm') selected @endif>09:00 pm
                        </option>
                        <option value="09:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '09:30 pm') selected @endif>09:30 pm
                        </option>
                        <option value="10:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '10:00 pm') selected @endif>10:00 pm
                        </option>
                        <option value="10:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '10:30 pm') selected @endif>10:30 pm
                        </option>
                        <option value="11:00 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '11:00 pm') selected @endif>11:00 pm
                        </option>
                        <option value="11:30 pm" @if (isset($booking) && isset($booking->from_time) && $booking->from_time == '11:30 pm') selected @endif>11:30 pm
                        </option>

                    </select>
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="timeslot_to">Select to Time</label>
                    <select name="to_time" id="timeslot_to" required="required" aria-describedby="timeslot_from"
                        placeholder="Select to Time" class="form-control select2" data-select2-id="timeslot_to"
                        tabindex="-1" aria-hidden="true">
                        <option value="" data-select2-id="7">Select To Time</option>
                        <option value="05:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '05:00 am') selected @endif>05:00 am
                        </option>
                        <option value="05:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '05:30 am') selected @endif>05:30 am
                        </option>
                        <option value="06:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '06:00 am') selected @endif>06:00 am
                        </option>
                        <option value="06:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '06:30 am') selected @endif>06:30 am
                        </option>
                        <option value="07:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '07:00 am') selected @endif>07:00 am
                        </option>
                        <option value="07:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '07:30 am') selected @endif>07:30 am
                        </option>
                        <option value="08:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '08:00 am') selected @endif>08:00 am
                        </option>
                        <option value="08:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '08:30 am') selected @endif>08:30 am
                        </option>
                        <option value="09:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '09:00 am') selected @endif>09:00 am
                        </option>
                        <option value="09:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '09:30 am') selected @endif>09:30 am
                        </option>
                        <option value="10:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '10:00 am') selected @endif>10:00 am
                        </option>
                        <option value="10:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '10:30 am') selected @endif>10:30 am
                        </option>
                        <option value="11:00 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '11:00 am') selected @endif>11:00 am
                        </option>
                        <option value="11:30 am" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '11:30 am') selected @endif>11:30 am
                        </option>
                        <option value="12:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '12:00 pm') selected @endif>12:00 pm
                        </option>
                        <option value="12:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '12:30 pm') selected @endif>12:30 pm
                        </option>
                        <option value="01:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '01:00 pm') selected @endif>01:00 pm
                        </option>
                        <option value="01:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '01:30 pm') selected @endif>01:30 pm
                        </option>
                        <option value="02:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '02:00 pm') selected @endif>02:00 pm
                        </option>
                        <option value="02:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '02:30 pm') selected @endif>02:30 pm
                        </option>
                        <option value="03:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '03:00 pm') selected @endif>03:00 pm
                        </option>
                        <option value="03:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '03:30 pm') selected @endif>03:30 pm
                        </option>
                        <option value="04:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '04:00 pm') selected @endif>04:00 pm
                        </option>
                        <option value="04:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '04:30 pm') selected @endif>04:30 pm
                        </option>
                        <option value="05:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '05:00 pm') selected @endif>05:00 pm
                        </option>
                        <option value="05:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '05:30 pm') selected @endif>05:30 pm
                        </option>
                        <option value="06:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '06:00 pm') selected @endif>06:00 pm
                        </option>
                        <option value="06:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '06:30 pm') selected @endif>06:30 pm
                        </option>
                        <option value="07:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '07:00 pm') selected @endif>07:00 pm
                        </option>
                        <option value="07:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '07:30 pm') selected @endif>07:30 pm
                        </option>
                        <option value="08:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '08:00 pm') selected @endif>08:00 pm
                        </option>
                        <option value="08:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '08:30 pm') selected @endif>08:30 pm
                        </option>
                        <option value="09:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '09:00 pm') selected @endif>09:00 pm
                        </option>
                        <option value="09:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '09:30 pm') selected @endif>09:30 pm
                        </option>
                        <option value="10:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '10:00 pm') selected @endif>10:00 pm
                        </option>
                        <option value="10:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '10:30 pm') selected @endif>10:30 pm
                        </option>
                        <option value="11:00 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '11:00 pm') selected @endif>11:00 pm
                        </option>
                        <option value="11:30 pm" @if (isset($booking) && isset($booking->to_time) && $booking->to_time == '11:30 pm') selected @endif>11:30 pm
                        </option>

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
                        {{ __('Tests') }}
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
                                    {{ __('Name') }}
                                </th>
                                {{-- <th width="30%">
                                    {{__('Category')}}
                                </th> --}}
                                <th>
                                    {{ __('Price') }}
                                </th>
                                <th width="10px">
                                </th>
                            </tr>
                        </thead>
                        <tbody id="selected_tests">
                            @if (isset($booking))
                                @foreach ($booking->tests as $test)
                                    <tr class="selected_test" id="test_{{ $test->id }}"
                                        default_price="{{ $test->price }}">
                                        <td>
                                            {{ $test->test_name }}
                                            <input type="hidden" class="tests_id" name="tests_id[]"
                                                value="{{ $test->id }}">
                                        </td>
                                        {{-- <td> 
                                    {{$test->category->name}}
                                    <input type="hidden" class="tests_id" name="tests[{{ $test->id }}][id]" value="{{ $test->id }}">
                                    <input type="hidden" class="price" name="tests[{{ $test->id }}][price]" value="{{ $test->price }}">
                                </td> --}}
                                        <td class="test_price">
                                            {{ $test->price }}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm delete_selected_row">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
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
                        {{ __('Receipt') }}
                    </h3>
                </div>
                <div class="card-body p-0" id="receipt">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table  table-stripped" id="receipt_table">
                                <tbody>

                                    <tr>
                                        <td width="100px">{{ __('Subtotal') }}</td>
                                        <td width="300px">
                                            <input type="number" id="subtotal" name="subtotal" readonly
                                                class="form-control"
                                                @if (isset($booking) && isset($booking->subtotal)) value="{{ $booking->subtotal }}"
                                            @else
                                            value="0" @endif>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ __('Discount') }}</td>
                                        <td>
                                            <input type="number" class="form-control" id="discount"
                                                name="discount"
                                                @if (isset($booking) && isset($booking->discount)) value="{{ $booking->discount }}"
                                            @else value="0" @endif>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ __('Hardcopy') }}</td>
                                        <td>
                                            <input type="number" class="form-control" id="Hardcopy"
                                                name="hardcopy"
                                                @if (isset($booking) && isset($booking->hardcopy)) value="{{ $booking->hardcopy }}"
                                            @else value="0" @endif>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Logistics Charges') }}</td>
                                        <td>
                                            <input type="number" class="form-control" id="logistics_charges"
                                                name="logistics_charges"
                                                @if (isset($booking) && isset($booking->logistics_charges)) value="{{ $booking->logistics_charges }}"
                                            @else value="0" @endif>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td>{{ __('Total') }}</td>
                                        <td>
                                            <input type="number" id="total" class="form-control"
                                                @if (isset($booking) && isset($booking->total)) value="{{ $booking->total }}"
                                            @else value="0" @endif
                                                name="total" readonly>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Paid') }}</td>
                                        <td>
                                            <input type="number" id="paid" min="0" class="form-control"
                                                @if (isset($booking) && isset($booking->paid)) value="{{ $booking->paid }}"
                                            @else value="0" @endif
                                                name="paid" readonly required>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('Due') }}</td>
                                        <td>
                                            <input type="number" id="due" class="form-control"
                                                @if (isset($booking) && isset($booking->due)) value="{{ $booking->due }}"
                                            @else value="0" @endif
                                                name="due" readonly>
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
                                {{ __('Payments') }}
                            </h5>
                            {{-- <butto  --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class=" col-md-12">
                            <label for="icon">{{ __('Payment Photo') }}</label>
                            <div class="custom-file">
                                <input type="file" name="payment_photo" accept="image/*"
                                    class="custom-file-input" id="payment_photo">
                                <label class="custom-file-label"
                                    for="payment_photo">{{ __('Payment Photo') }}</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <label for="payment_amount">{{ __('Amount') }}</label>
                            <input type="number" class="form-control amount" name="payment_amount"
                                @if (isset($booking) && isset($booking->paid)) value="{{ $booking->paid }}"
                            @else value="0" @endif
                                id="payment_amount">
                        </div>
                        <div class=" col-md-12">
                            <label for="payment_method">{{ __('Payment Method') }}</label>
                            <select name="payment_method_id" id="payment_method_id"
                                class="form-control payment_method_id">
                                <option value="" selected>{{ __('Select payment method') }}</option>
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
            <button type="submit" class="btn btn-primary form-control">{{ __('Save') }}</button>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <a href="{{ route('admin.booking.index') }}"
                class="btn btn-danger form-control cancel_form">{{ __('Cancel') }}</a>
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
