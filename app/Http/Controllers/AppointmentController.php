<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('web.pages.Appointment');
    }

    public function save(AppointmentRequest $request)
    {
        $data = $request->except('_token', '_method');
        $Appointment = Appointment::create($data);
        session()->flash('success', __('Request Booked successfully'));
        return redirect()->back();
    }
}
