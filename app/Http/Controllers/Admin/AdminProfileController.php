<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Auth;

class AdminProfileController extends Controller
{
    public function profile_reset(Request $req)
    {
        $req->validate([
            'email'=>'required|email',
            'name'=>'required'
          ]);

        $admin=Admin::where('email', Auth::guard('admin')->user()->email)->first();
        if ($req->password!="") {
            $req->validate([
                'password'=>'required',
                'confirm_password'=>'required|same:password',
              ]);

            $admin->password=Hash::make($req->password);
        }
        if ($admin) {
            $admin->name=$req->name;
            $admin->email=$req->email;
            $admin->update();
        }
        return redirect()->back()->with('success', 'profile data updated');
    }
}