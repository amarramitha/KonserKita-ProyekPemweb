<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminKonserController;
use App\Http\Controllers\DashboardController;
use App\Models\Konser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('dashboard', ['konsers' => Konser::all()]);
});

Route::get('/admin/dashboard', [AdminController::class,'index']);

Route::resource('/admin/dashboard/konsers', AdminKonserController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/{konser:slug}', [KonserController::class, 'show'])->middleware('auth');

Route::get('/bigufestival', function () {
    return view('bigufestival');
});

Route::get('/bigudesk', function () {
    return view('bigudesk');
});

Route::get('/bigusk', function () {
    return view('bigusk');
});

Route::get('/bigutiket', function () {
    return view('bigutiket');
});

Route::get('/bigutalent', function () {
    return view('bigutalent');
});

Route::get('/datatiket', function () {
    return view('datatiket');
});

Route::get('/metodebayar', function () {
    return view('metodebayar');
});

Route::get('/bersuadesk', function () {
    return view('bersuadesk');
});

Route::get('/bersuask', function () {
    return view('bersuask');
});

Route::get('/bersuatiket', function () {
    return view('bersuatiket');
});

Route::get('/bersuatalent', function () {
    return view('bersuatalent');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/detailtransaksi', function () {
    return view('detailtransaksi');
});

Route::get('/mytiket', function () {
    return view('mytiket');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/editprofil', function () {
    return view('editprofil');
});

Route::get('/lainnya', function () {
    return view('lainnya');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/authlogin', function () {
    return view('authlogin');
});

Route::get('/authregister', function () {
    return view('authregister');
});

Route::get('/icon-tabler', function () {
    return view('icon-tabler');
});

Route::get('/sample-page', function () {
    return view('sample-page');
});

Route::get('/ui-alert', function () {
    return view('ui-alert');
});

Route::get('/ui-button', function () {
    return view('ui-button');
});

Route::get('/ui-card', function () {
    return view('ui-card');
});

Route::get('/ui-form', function () {
    return view('ui-form');
});

Route::get('/ui-typography', function () {
    return view('ui-typography');
});
