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

route::get('admin/home', [AdminController::class,'index'])->name('admin.home')->middleware('Admin:admin');
route::get('admin/login', [AdminLoginController::class,'index'])->name('admin.Login');
route::post('admin/login_submit', [AdminLoginController::class,'login_submit'])->name('admin.login_submit');
route::get('admin/forgot_password', [AdminLoginController::class,'forgot_password'])->name('admin.forgot_password');
route::get('admin/logout', [AdminLoginController::class,'admin_logout'])->name('admin.logout')->middleware('Admin:admin');
route::post('admin/forgot_password_submit', [AdminLoginController::class,'forgot_password_submit'])->name('admin.forgot_password_submit');
route::post('admin.reset_password_final', [AdminLoginController::class,'reset_password_final'])->name('admin.reset_password_final')->middleware('Admin:admin');
route::get('admin/forgot_password/{token}/{email}', [AdminLoginController::class,'reset_password_link'])->name('admin.forgot_password/{token}/{email}')->middleware('Admin:admin');