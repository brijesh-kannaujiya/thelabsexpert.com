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
            $bookingData['payment_photo'] = 'admin/payment/' . $filename;
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
            // ->editColumn('subtotal',function($group){
            //     return formated_price($group['subtotal']);
            // })
            // ->editColumn('discount',function($group){
            //     return formated_price($group['discount']);
            // })
            // ->editColumn('total',function($group){
            //     return formated_price($group['total']);
            // })
            // ->editColumn('paid',function($group){
            //     return formated_price($group['paid']);
            // })
            // ->editColumn('due',function($group){
            //     return view('admin.groups._due',compact('group'));
            // })
            // ->editColumn('done', function ($group) {
            //     return view('admin.bookings._status', compact('group'));
            // })
            // ->addColumn('action', function ($group) {
            //     return view('admin.bookings._action', compact('group'));
            // })
            // ->addColumn('bulk_checkbox', function ($item) {
            //     return view('partials._bulk_checkbox', compact('item'));
            // })
            // ->editColumn('created_at', function ($group) {
            //     return date('Y-m-d H:i', strtotime($group['created_at']));
            // })
            ->toJson();
    }
}
