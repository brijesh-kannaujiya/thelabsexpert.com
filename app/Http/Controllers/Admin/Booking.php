<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class Booking extends Controller
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
        // dd($request->all());
        $data = $request->except('_token', '_method');
        $booking = Patient::create($data);
        session()->flash('success', __('Booking created successfully'));
        return redirect()->route('admin.booking.index');
    }
}
