<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use App\Models\Test;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PackagesController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_package',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_package',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_package',     ['only' => ['edit', 'updae']]);
        $this->middleware('can:delete_package',   ['only' => ['destroy', 'bulk_delete']]);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Package::with('tests', 'category');
            return DataTables::eloquent($model)
                ->editColumn('price', function ($package) {
                    return formated_price($package['price']);
                })
                ->editColumn('mrp_price', function ($package) {
                    return formated_price($package['mrp_price']);
                })
                ->addColumn('tests', function ($package) {
                    return view('admin.packages._tests', compact('package'));
                })
                ->addColumn('category', function ($category) {
                    return view('admin.packages._category', compact('category'));
                })
                ->addColumn('vial', function ($vial) {
                    return view('admin.packages._vial', compact('vial'));
                })
                ->addColumn('specimen', function ($specimen) {
                    return view('admin.packages._specimen', compact('specimen'));
                })
                ->addColumn('action', function ($package) {
                    return view('admin.packages._action', compact('package'));
                })
                ->addColumn('bulk_checkbox', function ($item) {
                    return view('admin.partials._bulk_checkbox', compact('item'));
                })
                ->toJson();
        }
        return view('admin.packages.index');
    }


    public function create()
    {
        return view('admin.packages.create');
    }
    public function store(PackageRequest $request)
    {


        $data = $request->except('_token', '_method', 'icon', 'files', 'banner', 'tests');
        $lastRecord = Package::latest()->withTrashed()->first();
        if ($lastRecord) {
            $lastId = $lastRecord->id;
            $data['code'] = 'PEXP' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $data['code'] = 'PEXP0001';
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
        $package = Package::create($data);

        if ($request->has('tests')) {
            foreach ($request['tests'] as $test_id) {
                $test = Test::find($test_id);
                if (isset($test)) {
                    $package->tests()->create([
                        'testable_id' => $test['id'],
                        'testable_type' => 'App\Models\Test'
                    ]);
                }
            }
        }

        session()->flash('success', __('Package created successfully'));
        return redirect()->route('admin.packages.index');
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);
        $data = $request->except('_token', '_method', 'icon', 'files', 'banner', 'tests');
        if ($request->hasFile('icon')) {
            $extension = $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move('admin/test/icon', 'icon_' . time() . '.' . $extension);
            $data['icon'] =  'admin/test/icon/icon_' . time() . '.' . $extension;
            if ($package->icon) {
                @unlink($package->icon);
            }
        }
        if ($request->hasFile('banner')) {
            $extension = $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move('admin/test/banner', 'banner_' . time() . '.' . $extension);
            $data['banner'] =  'admin/test/banner/banner_' . time() . '.' . $extension;
            if ($package->banner) {
                @unlink($package->banner);
            }
        }
        $package->update($data);

        $package->tests()->delete();
        if ($request->has('tests')) {
            foreach ($request['tests'] as $test_id) {
                $test = Test::find($test_id);
                if (isset($test)) {
                    $package->tests()->create([
                        'testable_id' => $test['id'],
                        'testable_type' => 'App\Models\Test'
                    ]);
                }
            }
        }
        session()->flash('success', __('Package updated successfully'));
        return redirect()->route('admin.packages.index');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->tests()->delete();
        $package->delete();
        session()->flash('success', __('Package deleted successfully'));

        return redirect()->route('admin.packages.index');
    }


    public function bulk_delete(BulkActionRequest $request)
    {
        foreach ($request['ids'] as $id) {
            $package = Package::find($id);
            $package->tests()->delete();
            $package->delete();
        }

        session()->flash('success', __('Bulk deleted successfully'));
        return redirect()->route('admin.packages.index');
    }
}
