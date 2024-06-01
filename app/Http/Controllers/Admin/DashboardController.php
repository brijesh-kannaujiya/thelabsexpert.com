<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $permissions = Permission::all();
        // $modules = Module::all();
        // dd($modules, $permissions);
        return view('admin.dashboard.index');
    }
}
