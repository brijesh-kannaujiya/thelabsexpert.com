<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Parameter;
use App\Models\Patient;
use App\Models\PaymentMethod;
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
    public function get_parameter(Request $request)
    {
        if (isset($request->term)) {
            $Parameter = Parameter::where('name', 'like', '%' . $request->term . '%')->take(20)->get();
        } else {
            $Parameter = Parameter::take(20)->get();
        }

        return response()->json($Parameter);
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

    public function tests(Request $request)
    {
        if (isset($request->term)) {
            $tests = Test::leftJoin('test_packages', 'tests.id', '=', 'test_packages.package_id')
                ->whereNull('test_packages.package_id')->where('tests.test_name', 'like', '%' . $request->term . '%')
                ->when($request->id, function ($query, $id) {
                    return $query->where('tests.id', '!=', $id);
                })
                ->select('tests.test_name', 'tests.id')
                ->get();
        } else {
            $tests = Test::leftJoin('test_packages', 'tests.id', '=', 'test_packages.package_id')
                ->whereNull('test_packages.package_id')
                ->when($request->id, function ($query, $id) {
                    return $query->where('tests.id', '!=', $id);
                })
                ->select('tests.test_name', 'tests.id')
                ->get();
        }
        return response()->json($tests);
    }

    public function patient_details(Request $request)
    {
        $data = Patient::where('phone', $request->phone_no)->first();
        if ($data) {
            return response()->json(['data' => $data, 'status' => true]);
        } else {
            return response()->json(['data' => 'No record found', 'status' => false]);
        }
    }

    public function GetTest(Request $request)
    {
        $tests = Test::where('id', $request->test_id)->first();
        return response()->json($tests);
    }


    public function getPaymentMethods()
    {
        $data = PaymentMethod::get();
        return response()->json($data);
    }

    public  function getTests(Request $request)
    {
        $tests = Test::where('test_name', 'like', '%' . $request->test_name . '%')->get();
        $html = '';
        foreach ($tests as $test) {
            $url = url('/test-detail/' . encryptWithPasscode($test->id));
            $html .= '<a class="search_item" href="' . $url . '">' . $test->test_name . '</a>';
        }
        return response()->json(['html' => $html]);
    }
}
