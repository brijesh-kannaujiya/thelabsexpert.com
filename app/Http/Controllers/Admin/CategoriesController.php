<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BulkActionRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Str;

class CategoriesController extends Controller
{
    /**
     * assign roles
     */
    public function __construct()
    {
        $this->middleware('can:view_category',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_category',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_category',     ['only' => ['edit', 'update']]);
        $this->middleware('can:delete_category',   ['only' => ['destroy', 'bulk_delete']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Category::query();

            return DataTables::eloquent($model)
                ->addColumn('action', function ($category) {
                    return view('admin.categories._action', compact('category'));
                })
                ->editColumn('description', function ($category) {
                    return  Str::words($category['description'], 5, '...');
                })
                ->editColumn('icon', function ($category) {
                    $icon = $category->icon;
                    return view('admin.partials._icon', compact('icon'));
                })
                ->addColumn('bulk_checkbox', function ($item) {
                    return view('admin.partials._bulk_checkbox', compact('item'));
                })
                ->addColumn('icon', function ($category) {
                    $iconUrl = url($category->icon);
                    return view('admin.categories._icon', compact('iconUrl'));
                })
                ->toJson();
        }
        return view('admin.categories.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->except('_token', '_method', 'icon', 'files');
        if ($request->hasFile('icon')) {
            // $extension = $request->file('icon')->getClientOriginalExtension();
            // $request->file('icon')->move('admin/category', 'icon_' . time() . '.' . $extension);
            // $data['icon'] =  'admin/category/icon_' . time() . '.' . $extension;
            $extension = $request->file('icon')->getClientOriginalExtension();
            $filename = 'icon_' . time() . '.' . $extension;
            $request->file('icon')->move(public_path('admin/category'), $filename);
            $data['icon'] = 'admin/category/' . $filename;
        }
        $category = Category::create($data);
        session()->flash('success', __('Category created successfully'));
        return redirect()->route('admin.categories.index');
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
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->except('_token', '_method', 'files');
        if ($request->hasFile('icon')) {
            $extension = $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move('admin/category', 'icon_' . time() . '.' . $extension);
            $data['icon'] =  'admin/category/icon_' . time() . '.' . $extension;
            if ($category->icon) {
                @unlink($category->icon);
            }
        }
        $category->update($data);
        session()->flash('success', __('Category updated successfully'));
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->icon) {
            @unlink($category->icon);
        }
        $category->delete();
        session()->flash('success', __('Category deleted successfully'));
        return redirect()->route('admin.categories.index');
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
            $category = Category::findOrFail($id);
            if ($category->icon) {
                @unlink($category->icon);
            }
            $category->delete();
        }

        session()->flash('success', __('Bulk deleted successfully'));

        return redirect()->route('admin.categories.index');
    }
}
