<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\SpecimenRequest;
use App\Models\Specimen;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SpecimenController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_specimen',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_specimen',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_specimen',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_specimen',   ['only' => ['destroy', 'bulk_delete']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Specimen::query();

            return DataTables::eloquent($model)
                ->addColumn('action', function ($specimen) {
                    return view('admin.specimen._action', compact('specimen'));
                })
                ->addColumn('bulk_checkbox', function ($item) {
                    return view('admin.partials._bulk_checkbox', compact('item'));
                })
                ->toJson();
        }
        return view('admin.specimen.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specimen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecimenRequest $request)
    {
        $data = $request->except('_token', '_method', 'files');

        $Specimen = Specimen::create($data);
        session()->flash('success', __('Specimen created successfully'));
        return redirect()->route('admin.specimens.index');
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
        $specimen = Specimen::findOrFail($id);
        return view('admin.specimen.edit', compact('specimen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpecimenRequest $request, $id)
    {
        $specimen = Specimen::findOrFail($id);
        $data = $request->except('_token', '_method', 'files');

        $specimen->update($data);
        session()->flash('success', __('Specimen updated successfully'));
        return redirect()->route('admin.specimens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vial = Specimen::findOrFail($id);

        $Vial->delete();
        session()->flash('success', __('Specimen deleted successfully'));
        return redirect()->route('admin.specimens.index');
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
            $Vial = Specimen::findOrFail($id);
            $Vial->delete();
        }

        session()->flash('success', __('Bulk deleted successfully'));

        return redirect()->route('admin.specimens.index');
    }
}
