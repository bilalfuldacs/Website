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
    public function forgot_password_submit(Request $req)
    {
        $req->validate([
          'email'=>'required|email',
        ]);
        $admin=Admin::where('email', $req->email)->first();
        if (!$admin) {
            return redirect()->back()->with('error_message', 'email not found');
        }
        $token=hash('sha256', time());
        $admin->token=$token;
        $admin->update();

        $reset_link=url('admin/forgot_password/'.$token.' /'.$req->email);

        $subject="forgot password click link";
        $message='please click on the following link to reset password';
        $message.=' <a href="'.$reset_link.'">  Click Here </a>';


        \Mail::to($req->email)->send(new Websitemail($subject, $message));

        return   redirect()->route('admin.Login')->with('success_message', 'email sent for reset password');
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
    public function reset_password_link($token, $email)
    {
        $admin=Admin::where('token', $token)->where('email', $email)->first();
        if ($admin) {
            $admin->token=null;
            return view('admin.reset_password')->with('email', $email);
        } else {
            return view('admin.forgot_password', ['errorss' => "link is expired or some issue occur please request for password reset again"]);
        }
    }
    public function reset_password_final(Request $req)
    {
        $req->validate([
            'password'=>'required',
            'c_password'=>'required|same:password',
          ]);

        $password=Hash::make($req->password);
        $admin=Admin::where('email', $req->email)->first();
        $admin->token="null";
        $admin->password=$password;
        $admin->update();
        return   redirect()->route('admin.Login')->with('success', "password has been reset successfully");
    }
}