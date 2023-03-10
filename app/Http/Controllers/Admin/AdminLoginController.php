<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
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
}