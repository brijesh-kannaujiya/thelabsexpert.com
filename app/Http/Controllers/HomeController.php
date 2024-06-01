<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        return view('home');
    }


    public function Home()
    {
        return view('web.pages.Home');
    }


    public function create()
    {
        $permissions = Permission::all();
        $modules = Module::all();
        // dd($modules, $permissions);
        return view('admin.roles.create', compact('permissions', 'modules'));
    }
}
