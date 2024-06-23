<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Specimen;
use App\Models\Test;
use App\Models\Vial;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_categories(Request $request)
    {
        if (isset($request->term)) {
            $categories = Category::where('name', 'like', '%' . $request->term . '%')->take(20)->get();
        } else {
            $categories = Category::take(20)->get();
        }

        return response()->json($categories);
    }
    public function get_vials(Request $request)
    {
        if (isset($request->term)) {
            $Vials = Vial::where('name', 'like', '%' . $request->term . '%')->take(20)->get();
        } else {
            $Vials = Vial::take(20)->get();
        }

        return response()->json($Vials);
    }
    public function get_specimens(Request $request)
    {
        if (isset($request->term)) {
            $specimens = Specimen::where('name', 'like', '%' . $request->term . '%')->take(20)->get();
        } else {
            $specimens = Specimen::take(20)->get();
        }

        return response()->json($specimens);
    }

    public function get_tests(Request $request)
    {
        if (isset($request->term)) {
            $tests = Test::where('test_name', 'like', '%' . $request->term . '%')->take(20)->get();
        } else {
            $tests = Test::take(20)->get();
        }
        return response()->json($tests);
    }
}
