<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing profile
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('admin.profile.edit');
    }

    /**
     * Update profile
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request)
    {
        //update user
        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;

        //optional updating password
        if (!empty($request['password'])) {
            $user->password = Hash::make($request->password);
        }

        //signature
        if ($request->hasFile('signature')) {
            //upload signature
            $signature = $request->file('signature');
            $signature_name = auth()->user()->id . '.' . $signature->getClientOriginalExtension();
            $signature->move('uploads/signature', $signature_name);
            $user->signature = $signature_name;
        }

        //avatar
        if ($request->hasFile('avatar')) {
            //upload avatar
            $avatar = $request->file('avatar');
            $avatar_name = time() . auth()->guard('admin')->user()->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move('uploads/user-avatar', $avatar_name);
            $user->avatar = $avatar_name;
        }

        $user->save();

        session()->flash('success', __('Profile updated successfully'));

        return redirect()->route('admin.profile.edit');
    }
}
