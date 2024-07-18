<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    //
    public function index()
    {
        $tests = Test::orderby('id', 'desc')->get();
        // dd($tests);
        return view('web.pages.tests', compact('tests'));
    }

    public function getTest($categoryId)
    {
        $categoryId = decryptWithPasscode($categoryId);
        $category = Category::find($categoryId);
        // $tests = Test::where('category_id',$categoryId)->get();
        $tests = Test::whereHas('categories', function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
        })->get();
        return view('web.pages.test', compact('category', 'tests'));
    }

    public function getTestDetails($testId)
    {
        $testId = decryptWithPasscode($testId);
        $test = Test::find($testId);
        $tests = Test::inRandomOrder()->limit(6)->get();
        return view('web.pages.test-detail', compact('test', 'tests'));
    }

    public function testDetail($id)
    {
        $testId = decryptWithPasscode($id);
        $test = Test::find($testId);
        // $tests = Test::inRandomOrder()->limit(6)->get();
        // dd($tests);
        return view('web.pages.book-detail', compact('test'));
    }
}
