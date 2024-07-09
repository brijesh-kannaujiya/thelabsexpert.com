<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Models\UserPrescription;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PrescriptionsController extends Controller
{
    /**
     * Assign roles.
     */
    public function __construct()
    {
        $this->middleware('can:view_prescriptions',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_prescriptions',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_prescriptions',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_prescriptions',   ['only' => ['destroy', 'bulk_delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = UserPrescription::query();

            return DataTables::eloquent($model)
                ->addColumn('action', function ($coupon) {
                    return view('admin.prescription._action', compact('coupon'));
                })
                ->editColumn('file', function ($coupon) {
                    $file = $coupon->prescription;
                    return view('admin.prescription._file', compact('file'));
                })
                ->addColumn('bulk_checkbox', function ($item) {
                    return view('admin.partials._bulk_checkbox', compact('item'));
                })
                ->toJson();
        }
        return view('admin.prescription.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.prescription.create');
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
    // public function edit($id)
    // {
    //     $coupon = Coupon::findOrFail($id);
    //     return view('admin.coupon.edit', compact('coupon'));
    // }

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
        $coupon = UserPrescription::findOrFail($id);
        if ($coupon->icon) {
            @unlink($coupon->icon);
        }
        $coupon->delete();
        session()->flash('success', __('Prescription deleted successfully'));
        return redirect()->route('admin.prescriptions.index');
    }

    /**
     * Bulk delete.
     *
     * @param  \App\Http\Requests\BulkActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function bulk_delete(BulkActionRequest $request)
    {
        foreach ($request['ids'] as $id) {
            $coupon = UserPrescription::findOrFail($id);
            $coupon->delete();
        }

        session()->flash('success', __('Bulk deleted successfully'));
        return redirect()->route('admin.prescriptions.index');
    }
}
