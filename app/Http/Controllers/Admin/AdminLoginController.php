<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Admin;
use App\Http\Requests\AdminLoginRequest;
use Auth;
use Hash;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.Login');
    }
    public function forgot_password()
    {
        return view('admin.forgot_password');
    }
    public function Login_submit(AdminLoginRequest $req)
    {
        $credential=[
            'email'=>$req->email,
            'password'=>$req->password,
        ];

        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin.home');
        } else {
            return   redirect()->route('admin.Login')->with('error_message', 'Incorrect information');
        }
    }
    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return   redirect()->route('admin.Login');
    }
}