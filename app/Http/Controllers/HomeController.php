<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPrescription;
use App\Models\Module;
use App\Models\Permission;
use App\Models\UserPrescription as ModelsUserPrescription;
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

    public function prescription()
    {
        return view('web.pages.prescription');
    }

    public function savePrescription(UserPrescription $request)
    {
        $data = $request->except('_token', '_method','fdd');
        if ($request->hasFile('prescription')) {
            $extension = $request->file('prescription')->getClientOriginalExtension();
            $filename = 'prescription_' . time() . '.' . $extension;
            $request->file('prescription')->move(public_path('web/prescription'), $filename);
            $data['prescription'] = 'web/prescription/' . $filename;
        }
        // dd($data);
        $prescription = ModelsUserPrescription::create($data);
        session()->flash('success', __('Prescription uploaded successfully'));
        return redirect('/');
        
    }


    public function create()
    {
        $permissions = Permission::all();
        $modules = Module::all();
        // dd($modules, $permissions);
        return view('admin.roles.create', compact('permissions', 'modules'));
    }
}
