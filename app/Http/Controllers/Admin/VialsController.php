<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\VialsRequest;
use App\Models\Vial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VialsController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_vials',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_vials',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_vials',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_vials',   ['only' => ['destroy', 'bulk_delete']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Vial::query();

            return DataTables::eloquent($model)
                ->addColumn('action', function ($vial) {
                    return view('admin.vials._action', compact('vial'));
                })
                ->addColumn('bulk_checkbox', function ($item) {
                    return view('admin.partials._bulk_checkbox', compact('item'));
                })
                ->toJson();
        }
        return view('admin.vials.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VialsRequest $request)
    {
        $data = $request->except('_token', '_method', 'files');

        $category = Vial::create($data);
        session()->flash('success', __('Vials created successfully'));
        return redirect()->route('admin.vials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vial = Vial::findOrFail($id);
        return view('admin.vials.edit', compact('vial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VialsRequest $request, $id)
    {
        $Vial = Vial::findOrFail($id);
        $data = $request->except('_token', '_method', 'files');

        $Vial->update($data);
        session()->flash('success', __('Vial updated successfully'));
        return redirect()->route('admin.vials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vial = Vial::findOrFail($id);

        $Vial->delete();
        session()->flash('success', __('Vial deleted successfully'));
        return redirect()->route('admin.vials.index');
    }

    /**
     * Bulk delete
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bulk_delete(BulkActionRequest $request)
    {
        foreach ($request['ids'] as $id) {
            $Vial = Vial::findOrFail($id);
            $Vial->delete();
        }

        session()->flash('success', __('Bulk deleted successfully'));

        return redirect()->route('admin.vials.index');
    }
}
