<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::get('admin/home', [AdminController::class,'index'])->name('admin.home');
route::get('admin/login', [AdminLoginController::class,'index'])->name('admin.Login');
route::get('admin/forgot_password', [AdminLoginController::class,'forgot_password'])->name('admin.forgot_password');