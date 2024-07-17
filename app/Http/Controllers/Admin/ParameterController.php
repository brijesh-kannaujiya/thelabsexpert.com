<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\ParameterRequest;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ParameterController extends Controller
{
    /**
     * Assign roles.
     */
    public function __construct()
    {
        $this->middleware('can:view_parameters',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_parameters',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_parameters',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_parameters',   ['only' => ['destroy', 'bulk_delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Parameter::query();

            return DataTables::eloquent($model)
                ->addColumn('action', function ($parameter) {
                    return view('admin.parameters._action', compact('parameter'));
                })
                // ->editColumn('description', function ($parameter) {
                //     return htmlspecialchars($parameter->description);
                // })
                ->addColumn('bulk_checkbox', function ($item) {
                    return view('admin.partials._bulk_checkbox', compact('item'));
                })
                ->toJson();
        }
        return view('admin.parameters.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parameters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CouponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParameterRequest $request)
    {
        $data = $request->except('_token', '_method');
        $parameter = Parameter::create($data);
        session()->flash('success', __('Parameter created successfully'));
        return redirect()->route('admin.parameters.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parameter = Parameter::findOrFail($id);
        return view('admin.parameters.edit', compact('parameter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CouponRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParameterRequest $request, $id)
    {
        $parameter = Parameter::findOrFail($id);
        $data = $request->except('_token', '_method');

        $parameter->update($data);
        session()->flash('success', __('Parameters updated successfully'));
        return redirect()->route('admin.parameters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parameter = Parameter::findOrFail($id);
        $parameter->delete();
        session()->flash('success', __('Parameter deleted successfully'));
        return redirect()->route('admin.parameters.index');
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
            $parameter = Parameter::findOrFail($id);
            $parameter->delete();
        }

        session()->flash('success', __('Bulk deleted successfully'));
        return redirect()->route('admin.parameters.index');
    }
}
