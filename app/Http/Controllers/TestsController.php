<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    //
    public function getTest($categoryId){
        $category = Category::find($categoryId);
        $tests = Test::where('category_id',$categoryId)->get();
        return view('web.pages.test',compact('category','tests'));

    }

    public function getTestDetails($testId){
        $test = Test::find($testId);
        $tests = Test::where('category_id',$test->category_id)->inRandomOrder()->limit(6)->get();
        // dd($tests);
        return view('web.pages.test-detail',compact('test','tests'));

    }
}
