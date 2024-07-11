<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\TestRequest;
use App\Models\Category;
use App\Models\Specimen;
use App\Models\Test;
use App\Models\TestPackage;
use App\Models\TestSpecimen;
use App\Models\TestVial;
use App\Models\Vial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Str;

class TestController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_test',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_test',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_test',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_test',   ['only' => ['destroy', 'bulk_delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tests.index');
    }


    /**
     * get tests datatable
     *
     * @access public
     * @var  @Request $request
     */
    public function ajax(Request $request)
    {
        $model = Test::with(['category', 'vials', 'specimens', 'tests']);
        // dd($model);
        return DataTables::eloquent($model)
            ->editColumn('price', function ($test) {
                return formated_price($test['price']);
            })
            ->editColumn('customer_instructions', function ($test) {
                return  Str::words($test['customer_instructions'], 5, '...');
            })
            ->editColumn('phlebo_instructions', function ($test) {
                return  Str::words($test['phlebo_instructions'], 5, '...');
            })
            ->editColumn('icon', function ($test) {
                $icon = $test->icon;
                return view('admin.partials._icon', compact('icon'));
            })
            ->addColumn('tests', function ($tests) {
                return view('admin.tests._tests', compact('tests'));
            })
            ->addColumn('action', function ($test) {
                return view('admin.tests._action', compact('test'));
            })
            ->addColumn('vial', function ($test) {
                return view('admin.tests._vial', compact('test'));
            })
            ->addColumn('specimen', function ($test) {
                return view('admin.tests._specimen', compact('test'));
            })
            ->addColumn('bulk_checkbox', function ($item) {
                return view('admin.partials._bulk_checkbox', compact('item'));
            })
            ->order(function ($query) {
                $query->orderBy('id', 'desc');
            })
            ->toJson();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('name', 'id')->get();
        $vials = Vial::select('name', 'id')->get();
        $specimens = Specimen::select('name', 'id')->get();
        $testsWithoutPackages = Test::leftJoin('test_packages', 'tests.id', '=', 'test_packages.package_id')
            ->whereNull('test_packages.package_id')
            ->get();
        return view('admin.tests.create', compact('categories', 'vials', 'specimens', 'testsWithoutPackages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {
        // dd($request->all());
        $data = $request->except('_token', '_method', 'icon', 'files', 'banner', 'tests', 'vial_ids', 'specimen_ids');

        $lastRecord = Test::latest()->withTrashed()->first();
        if ($lastRecord) {
            $lastId = $lastRecord->id;
            $data['test_code'] = 'EXP' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $data['test_code'] = 'EXP0001';
        }

        if ($request->hasFile('icon')) {
            $extension = $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('admin/test/icon'), 'icon_' . time() . '.' . $extension);
            $data['icon'] =  'admin/test/icon/icon_' . time() . '.' . $extension;
        } else {
            $data['icon'] =  'admin/test/icon/icon.png';
        }

        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move(public_path('admin/test/banner'), 'banner_' . time() . '.' . $extension);
            $data['banner'] =  'admin/test/banner/banner_' . time() . '.' . $extension;
        } else {
            $data['banner'] = 'admin/test/banner/banner.png';
        }
        $NewTest = Test::create($data);
        if ($request->has('tests')) {
            foreach ($request['tests'] as $test_id) {
                if ($test_id != '') {
                    TestPackage::create([
                        'package_id' => $NewTest->id,
                        'test_id' => $test_id
                    ]);
                }
            }
        }
        if ($request->has('specimen_ids')) {
            foreach ($request['specimen_ids'] as $specimen_id) {
                if ($specimen_id != '') {
                    TestSpecimen::create([
                        'specimen_id' => $specimen_id,
                        'test_id' => $NewTest->id
                    ]);
                }
            }
        }
        if ($request->has('vial_ids')) {
            foreach ($request['vial_ids'] as $vial_id) {
                if ($vial_id != '') {
                    TestVial::create([
                        'vial_id' => $vial_id,
                        'test_id' => $NewTest->id
                    ]);
                }
            }
        }
        session()->flash('success', __('Test created successfully'));
        return redirect()->route('admin.tests.index');
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
        $categories = Category::select('name', 'id')->get();
        $vials = Vial::select('name', 'id')->get();
        $specimens = Specimen::select('name', 'id')->get();
        $test = Test::with(['category', 'vial', 'specimen'])->where('id', $id)->firstOrFail();
        $testsWithoutPackages = Test::leftJoin('test_packages', 'tests.id', '=', 'test_packages.package_id')
            ->whereNull('test_packages.package_id')
            ->where('tests.id', '!=', $id)
            ->select('tests.id', 'tests.test_name')
            ->get();
        return view('admin.tests.edit', compact('test', 'categories', 'vials', 'specimens', 'testsWithoutPackages'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestRequest $request, $id)
    {
        $test = Test::findOrFail($id);
        $data = $request->except('_token', '_method', 'icon', 'files', 'banner', 'tests', 'vial_ids', 'specimen_ids');
        if ($request->hasFile('icon')) {
            $extension = $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('admin/test/icon'), 'icon_' . time() . '.' . $extension);
            $data['icon'] =  'admin/test/icon/icon_' . time() . '.' . $extension;
            if ($test->icon) {
                @unlink($test->icon);
            }
        }
        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move(public_path('admin/test/banner'), 'banner_' . time() . '.' . $extension);
            $data['banner'] =  'admin/test/banner/banner_' . time() . '.' . $extension;
            if ($test->banner) {
                @unlink($test->banner);
            }
        }
        $test->update($data);
        TestPackage::where('package_id', $id)->delete();
        if ($request->has('tests')) {
            foreach ($request['tests'] as $test_id) {
                TestPackage::create([
                    'package_id' => $id,
                    'test_id' => $test_id
                ]);
            }
        }
        TestSpecimen::where('test_id', $id)->delete();
        if ($request->has('specimen_ids')) {
            foreach ($request['specimen_ids'] as $specimen_id) {
                if ($specimen_id != '') {
                    TestSpecimen::create([
                        'specimen_id' => $specimen_id,
                        'test_id' => $test->id
                    ]);
                }
            }
        }
        TestVial::where('test_id', $id)->delete();
        if ($request->has('vial_ids')) {
            foreach ($request['vial_ids'] as $vial_id) {
                if ($vial_id != '') {
                    TestVial::create([
                        'vial_id' => $vial_id,
                        'test_id' => $test->id
                    ]);
                }
            }
        }
        session()->flash('success', __('Test updated successfully'));
        return redirect()->route('admin.tests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        TestPackage::where('package_id', $id)->delete();
        TestVial::where('test_id', $id)->delete();
        TestSpecimen::where('test_id', $id)->delete();
        $test->delete();
        session()->flash('success', __('Test deleted successfully'));

        return redirect()->route('admin.tests.index');
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
            $test = Test::find($id);
            TestPackage::where('package_id', $id)->delete();
            TestVial::where('test_id', $id)->delete();
            TestSpecimen::where('test_id', $id)->delete();
            $test->delete();
        }
        session()->flash('success', __('Bulk deleted successfully'));
        return redirect()->route('admin.tests.index');
    }
}
