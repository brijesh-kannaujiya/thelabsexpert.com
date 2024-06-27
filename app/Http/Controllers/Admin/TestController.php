<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\TestRequest;
use App\Models\Category;
use App\Models\Specimen;
use App\Models\Test;
use App\Models\Vial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        $model = Test::with(['category', 'vial', 'specimen']);

        return DataTables::eloquent($model)
            ->editColumn('price', function ($test) {
                return formated_price($test['price']);
            })
            ->addColumn('action', function ($test) {
                return view('admin.tests._action', compact('test'));
            })
            ->addColumn('bulk_checkbox', function ($item) {
                return view('admin.partials._bulk_checkbox', compact('item'));
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
        // $tests = Test::whereHas('tests', function ($query) {
        //     $query->whereColumn('testable_id', '!=', 'tests.id');
        // })->select('test_name', 'id')->get();
        // dd($tests);
        // $testsWithoutPackage = Test::join('test_packages', 'package_id', '!=', 'tests.id')
        //     ->get('tests.id');
        $testsWithoutPackages = Test::leftJoin('test_packages', 'tests.id', '=', 'test_packages.test_id')
            // ->whereNull('test_packages.package_id')
            ->where('tests.id', '!=', 'test_packages.package_id')
            ->select('tests.*')
            ->get();
        dd($testsWithoutPackages);
        return view('admin.tests.create', compact('categories', 'vials', 'specimens', 'test'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestRequest $request)
    {

        $data = $request->except('_token', '_method', 'icon', 'files', 'banner');
        $lastRecord = Test::latest()->withTrashed()->first();
        if ($lastRecord) {
            $lastId = $lastRecord->id;
            $data['test_code'] = 'EXP' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $data['test_code'] = 'EXP0001';
        }



        if ($request->hasFile('icon')) {
            $extension = $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move('admin/test/icon', 'icon_' . time() . '.' . $extension);
            $data['icon'] =  'admin/test/icon/icon_' . time() . '.' . $extension;
        } else {
            $data['icon'] =  'admin/test/icon/icon.png';
        }

        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move('admin/test/banner', 'banner_' . time() . '.' . $extension);
            $data['banner'] =  'admin/test/banner/banner_' . time() . '.' . $extension;
        } else {
            $data['banner'] = 'admin/test/banner/banner.png';
        }
        $test = Test::create($data);
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
        return view('admin.tests.edit', compact('test', 'categories', 'vials', 'specimens'));
    }

    public function consumptions($id)
    {
        $tests = Test::where('id', $id)->orWhere([
            ['parent_id', $id],
            ['separated', true]
        ])->get();

        return view('admin.tests.consumptions', compact('tests'));
    }

    public function consumptions_submit(Request $request)
    {
        if ($request->has('consumption')) {
            foreach ($request['consumption'] as $test_id => $consumptions) {
                $test = Test::find($test_id);

                if (isset($test)) {
                    $test->consumptions()->delete();

                    foreach ($consumptions as $consumption) {
                        $test->consumptions()->create([
                            'product_id' => $consumption['product_id'],
                            'quantity' => $consumption['quantity']
                        ]);
                    }
                }
            }
        }

        session()->flash('success', __('Consumptions assigned successfully'));
        return redirect()->route('admin.tests.index');
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
        $data = $request->except('_token', '_method', 'icon', 'files', 'banner');
        if ($request->hasFile('icon')) {
            $extension = $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move('admin/test/icon', 'icon_' . time() . '.' . $extension);
            $data['icon'] =  'admin/test/icon/icon_' . time() . '.' . $extension;
            if ($test->icon) {
                @unlink($test->icon);
            }
        }
        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move('admin/test/banner', 'banner_' . time() . '.' . $extension);
            $data['banner'] =  'admin/test/banner/banner_' . time() . '.' . $extension;
            if ($test->banner) {
                @unlink($test->banner);
            }
        }
        $test->update($data);
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
            $test->delete();
        }
        session()->flash('success', __('Bulk deleted successfully'));
        return redirect()->route('admin.tests.index');
    }
}
