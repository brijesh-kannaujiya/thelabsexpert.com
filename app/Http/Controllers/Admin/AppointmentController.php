<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AppointmentController extends Controller
{
    /**
     * Assign roles.
     */
    public function __construct()
    {
        $this->middleware('can:view_appointment',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:done_appointment',   ['only' => ['destroy', 'store']]);
        // $this->middleware('can:edit_coupon',     ['only' => ['edit', 'update']]);
        // $this->middleware('can:delete_coupon',   ['only' => ['destroy', 'bulk_delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Appointment::where('status', 'new');

            return DataTables::eloquent($model)
                ->addColumn('action', function ($appointment) {
                    return view('admin.appointment._action', compact('appointment'));
                })
                ->toJson();
        }
        return view('admin.appointment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.coupon.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CouponRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(CouponRequest $request)
    // {
    //     $data = $request->except('_token', '_method');
    //     $coupon = Coupon::create($data);
    //     session()->flash('success', __('Coupon created successfully'));
    //     return redirect()->route('admin.coupon.index');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'done';
        $appointment->save();
        session()->flash('success', __('Appointment Done successfully'));
        return redirect()->route('admin.appointment.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CouponRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(CouponRequest $request, $id)
    // {
    //     $coupon = Coupon::findOrFail($id);
    //     $data = $request->except('_token', '_method');

    //     $coupon->update($data);
    //     session()->flash('success', __('Coupon updated successfully'));
    //     return redirect()->route('admin.coupon.index');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'done';
        $appointment->save();
        session()->flash('success', __('Appointment Done successfully'));
        return redirect()->route('admin.appointment.index');
    }

    /**
     * Bulk delete.
     *
     * @param  \App\Http\Requests\BulkActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function bulk_delete(BulkActionRequest $request)
    // {
    //     foreach ($request['ids'] as $id) {
    //         $coupon = Coupon::findOrFail($id);
    //         $coupon->delete();
    //     }

    //     session()->flash('success', __('Bulk deleted successfully'));
    //     return redirect()->route('admin.coupon.index');
    // }
}
