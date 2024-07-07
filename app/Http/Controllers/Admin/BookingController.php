<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\BookingStatus;
use App\Models\BookingTest;
use App\Models\Patient;
use App\Models\PaymentMethod;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:view_booking',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_booking',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_booking',     ['only' => ['edit', 'updae']]);
        $this->middleware('can:delete_booking',   ['only' => ['destroy', 'bulk_delete']]);
    }

    public function index()
    {
        return view('admin.bookings.index');
    }

    public function create()
    {
        return view('admin.bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest $request)
    {
        $patientData = $request->except('_token', '_method', 'barcode', 'date', 'from_time', 'to_time', 'tests_id', 'tests', 'payment_photo', 'payment_amount', 'payment_method_id', 'phone', 'prescriptions', 'subtotal', 'discount', 'hardcopy', 'logistics_charges', 'total', 'paid', 'due');

        if ($request->hasFile('prescriptions')) {
            $extension = $request->file('prescriptions')->getClientOriginalExtension();
            $imagePath = 'prescriptions_' . time() . '.' . $extension;
            $a = $request->file('prescriptions')->move(public_path('admin/bookingdata'), $imagePath);
            $patientData['prescriptions'] = 'admin/bookingdata/' . $imagePath;
        }
        $patient = Patient::where('phone', $request->phone)->first();
        if ($patient) {
            $patient->update($patientData);
        } else {
            $patient = new Patient;
            $patientData['phone'] = $request->phone;
            $patient->create($patientData);
        }
        $bookingData = $request->only('barcode', 'date', 'from_time', 'to_time', 'payment_method_id', 'subtotal', 'discount', 'hardcopy', 'logistics_charges', 'total', 'paid', 'due');
        $bookingData['patient_id'] = $patient->id;
        if ($request->hasFile('payment_photo')) {
            $extension = $request->file('payment_photo')->getClientOriginalExtension();
            $filename = 'payment_photo_' . time() . '.' . $extension;
            $request->file('payment_photo')->move(public_path('admin/payment_photo'), $filename);
            $bookingData['payment_photo'] = 'admin/payment_photo/' . $filename;
        }
        $booking  = Booking::create($bookingData);
        foreach ($request->tests_id as $key => $value) {
            BookingTest::create(['test_id' => $value, 'booking_id' => $booking->id]);
        }
        BookingStatus::create(['status_id' => 1, 'booking_id' => $booking->id]);
        session()->flash('success', __('Booking created successfully'));
        return Redirect::route('admin.booking.index');
    }

    public function ajax(Request $request)
    {
        $model = Booking::with('patient', 'paymentMethod');
        return DataTables::eloquent($model)
            ->editColumn('id', function ($booking) {
                return view('admin.bookings._id', compact('booking'));
            })
            ->addColumn('status', function ($booking) {
                $statuses = Status::get();
                return view('admin.bookings._status_data', compact('booking', 'statuses'));
            })
            ->addColumn('reportDataTime', function ($booking) {
                return view('admin.bookings._reportDataTime', compact('booking'));
            })
            ->addColumn('nameAndAge', function ($booking) {
                return view('admin.bookings._nameAndAge', compact('booking'));
            })
            ->addColumn('contacts', function ($booking) {
                return view('admin.bookings._contacts', compact('booking'));
            })
            ->addColumn('payments', function ($booking) {
                $peymentMethod = PaymentMethod::get();
                return view('admin.bookings._payments', compact('booking', 'peymentMethod'));
            })
            ->addColumn('UpdateInfo', function ($booking) {
                return view('admin.bookings._updateInfo', compact('booking'));
            })
            ->toJson();
    }

    public function UpdateStatus(Request $request)
    {
        $booking = new BookingStatus;
        $booking->booking_id = $request->booking_id;
        $booking->status_id = $request->status_id;
        $booking->save();
        return response()->json(['message' => 'Status updated successfully']);
    }


    public function UpdatePayment(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        $booking->payment_method_id = $request->payment_method_id;
        $payment_amount = $booking->due - $request->payment_amount;
        if ($payment_amount < 0) {
            $payment_amount = 0;
        }
        $booking->paid = $booking->paid + $request->payment_amount;
        $booking->due = $payment_amount;
        if ($request->hasFile('payment_photo')) {
            $extension = $request->file('payment_photo')->getClientOriginalExtension();
            $filename = 'payment_photo_' . time() . '.' . $extension;
            $request->file('payment_photo')->move(public_path('admin/payment_photo'), $filename);
            $booking->payment_photo = 'admin/payment_photo/' . $filename;
        }
        $booking->save();
        return response()->json(['message' => 'Payment updated successfully']);
    }

    public function updatePatientInfo(Request $request, $booking_id)
    {
        // Find the booking by ID
        $booking = Booking::find($booking_id);
        if (!$booking) {
            return response()->json(['error' => 'Booking not found'], 404);
        }

        // Find the patient related to the booking
        // $patient = $booking->patient_id;
        $patient = Patient::find($booking->patient_id);
        if (!$patient) {
            return response()->json(['error' => 'Patient not found'], 404);
        }
        $patient->name = $request->name;
        $patient->age = $request->age;
        $patient->email_secondary = $request->email_secondary;
        $patient->address = $request->address;
        $patient->pincode = $request->pincode;
        $patient->aadhar_number = $request->aadhar_number;
        $patient->passport_number = $request->passport_number;
        $patient->srf_id = $request->srf_id;
        $patient->comment = $request->comment;
        $patient->phlebo_comment = $request->phlebo_comment;
        $patient->save();
        $booking->barcode = $request->barcode;
        $booking->save();
        return response()->json(['success' => 'Patient information updated successfully']);
    }

    function Edit($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return Redirect::route('admin.booking.index')->with('error', __('Booking not found'));
        }
        $PaymentMethodes = PaymentMethod::get();
        return view('admin.bookings.edit', compact('booking', 'PaymentMethodes'));
    }

    public function update(BookingRequest $request, $id)
    {
        $booking = Booking::findOrFail($id);
        if (!$booking) {
            return Redirect::route('admin.booking.index')->with('error', __('Booking not found'));
        }
        $patientData = $request->except('_token', '_method', 'barcode', 'date', 'from_time', 'to_time', 'tests_id', 'tests', 'payment_photo', 'payment_amount', 'payment_method_id', 'phone', 'prescriptions', 'subtotal', 'discount', 'hardcopy', 'logistics_charges', 'total', 'paid', 'due');

        if ($request->hasFile('prescriptions')) {
            $extension = $request->file('prescriptions')->getClientOriginalExtension();
            $imagePath = 'prescriptions_' . time() . '.' . $extension;
            $request->file('prescriptions')->move(public_path('admin/bookingdata'), $imagePath);
            $patientData['prescriptions'] = 'admin/bookingdata/' . $imagePath;
        }

        $patient = Patient::where('phone', $request->phone)->first();
        if ($patient) {
            $patient->update($patientData);
        } else {
            $patient = new Patient;
            $patientData['phone'] = $request->phone;
            $patient = $patient->create($patientData);
        }

        // Update booking data
        $bookingData = $request->only('barcode', 'date', 'from_time', 'to_time', 'payment_method_id', 'subtotal', 'discount', 'hardcopy', 'logistics_charges', 'total', 'paid', 'due');
        $bookingData['patient_id'] = $patient->id;

        if ($request->hasFile('payment_photo')) {
            $extension = $request->file('payment_photo')->getClientOriginalExtension();
            $filename = 'payment_photo_' . time() . '.' . $extension;
            $request->file('payment_photo')->move(public_path('admin/payment_photo'), $filename);
            $bookingData['payment_photo'] = 'admin/payment_photo/' . $filename;
        }

        $booking->update($bookingData);

        // Update associated tests
        BookingTest::where('booking_id', $booking->id)->delete();
        foreach ($request->tests_id as $key => $value) {
            BookingTest::create(['test_id' => $value, 'booking_id' => $booking->id]);
        }

        // Update booking status
        BookingStatus::where('booking_id', $booking->id)->update(['status_id' => 1]);

        session()->flash('success', __('Booking updated successfully'));
        return Redirect::route('admin.booking.index');
    }
}
