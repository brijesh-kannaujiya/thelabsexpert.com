<form class="editPatient-716294 pt-2" style="font-size: 0.9rem; width:400px">
    <div class="row">
        <div class="form-group col-6"><label for="barcode">Barcode</label> <input type="text" required="required" name="barcode" value="{{$booking->barcode}}" class="form-control form-control-sm barcode-716294"></div>
        <div class="form-group col-6"><label for="name">Patient Name</label> <input type="text" required="required" name="patient_name" value="{{$booking->patient->name}}" class="form-control form-control-sm"></div>
    </div>
    <div class="row">
        <div class="form-group col-6"><label for="age">Patient Age</label> <input type="number" min="10" required="required" name="patient_age" value="{{$booking->patient->age}}" class="form-control form-control-sm"></div>
        <div class="form-group col-6"><label for="age">Email(Secondary)</label> <input type="email" value="{{$booking->patient->email_secondary}}" name="email_secondary" aria-describedby="email_secondary" placeholder="Enter Patient`s Secondary Email" class="form-control" data-temp-mail-org="0"></div>
    </div>
    <div class="row">
        <div class="form-group col-4"><label for="address">Patient Address</label> <textarea min="7" required="required" name="patient_address" value="E-1, E Block, Dhawans Villa, Sector-27, Noida-201301" class="form-control form-control-sm">{{$booking->patient->address}}</textarea></div>
        <div class="form-group col-2"><label for="pincode">Pincode</label> <input type="text" name="pincode" value="{{$booking->patient->pincode}}" class="form-control form-control-sm"></div>
        <div class="form-group col-3"><label for="aadharNo">Aadhar Number</label> <input type="text" name="aadharNo" value="{{$booking->patient->aadhar_number}}" class="form-control form-control-sm"></div>
        <div class="form-group col-3"><label for="passport">Passport Number</label> <input type="text" name="passport" value="{{$booking->patient->passport_number}}" class="form-control form-control-sm"></div>
        <div class="form-group col-3"><label for="srfID">SRF ID</label> <input type="text" name="srfID" value="{{$booking->patient->srf_id}}" class="form-control form-control-sm"></div>
    </div>
    <div class="row">
        <div class="form-group col-6"><label for="comment">Comment</label> <textarea rows="2" name="comments" value="pt want this slot only" class="form-control form-control-sm">{{$booking->patient->comment}} </textarea></div>
        <div class="form-group col-6"><label for="phlebo_comment">Phlebo Comment</label> <textarea rows="2" name="phlebo_comment" value="{{$booking->patient->phlebo_comment}}" class="form-control form-control-sm phlebo_comment_form-716294"></textarea></div>
    </div>
    <center><button bid="716294" type="button" data-style="zoom-in" class="ladda-button btn btn-primary btn-sm savePatientBtn">Save</button></center>
</form>
