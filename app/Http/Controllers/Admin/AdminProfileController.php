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
        if ($req->hasFile('photo')!="") {
            $req->validate([
                'photo'=>'image|mimes:jpg,jpeg,png',

              ]);
            unlink(public_path('uploads/'.$admin->photo));
            $ext=$req->file('photo')->extension();

            $file_name='admin'. ' .'. $ext;
            $req->file('photo')->move(public_path('uploads/'), $file_name);
            $admin->password=Hash::make($req->password);
            $admin->photo=$file_name;
        }
        if ($admin) {
            $admin->name=$req->name;
            $admin->email=$req->email;
            $admin->update();
        }
        return redirect()->back()->with('success', 'profile data updated');
    }
}