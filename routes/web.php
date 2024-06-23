<?php

use App\Models\Konser;
use App\Models\Syaratketentuan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KonserController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminKonserController;
use App\Http\Controllers\AdminPurchaseController;
use App\Http\Controllers\SyaratKetentuanController;

Route::get('/', function () {
    return view('dashboard', ['konsers' => Konser::latest()->take(3)->get()]);
});

Route::get('/lainnya', function () {
    return view('lainnya');
});

Route::get('/scanner', function () {
    return view('scanner');
})->middleware('admin');

Route::post('/scanner/store', [QrcodeController::class, 'store'])->name('store');

Route::get('/transaksi', [DashboardController::class, 'transaksi'])->middleware('auth');
Route::get('/tiket/{purchase:id}', [QrcodeController::class, 'generateQrcode']);
Route::get('/metodebayar', function () {
    return view('metodebayar', ['konsers' => Konser::all()]);
});

Route::get('/pembayaran', function () {
    return view('pembayaran', ['konsers' => Konser::all()]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/google', [LoginController::class, 'redirectGoogle']);
Route::get('/login/google/callback', [LoginController::class, 'callbackGoogle']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/editprofil/{user:id}/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/editprofil/{user:id}', [ProfileController::class, 'update'])->middleware('auth');
Route::get('/editprofil/checkId', [ProfileController::class, 'checkId'])->middleware('auth');
Route::resource('/editprofil', ProfileController::class)->middleware('auth');

Route::get('/admin/dashboard', [AdminController::class,'index'])->middleware('admin');
Route::get('/admin/dashboard/konsers/checkSlug', [AdminKonserController::class, 'checkSlug'] )->middleware('admin');
Route::resource('/admin/dashboard/users', UserController::class)->middleware('admin');
Route::resource('/admin/dashboard/purchases', AdminPurchaseController::class)->middleware('admin');
Route::resource('/admin/dashboard/konsers', AdminKonserController::class)->middleware('admin');
Route::prefix('admin/dashboard/konsers')->middleware('admin')->group(function () {
    Route::resource('{konser:slug}/tickets', TicketController::class);
    Route::resource('{konser:slug}/talents', TalentController::class);
    Route::resource('{konser:slug}/syaratketentuans', SyaratKetentuanController::class);
})->middleware('admin');

Route::get('/konsers', [KonserController::class, 'index'])->middleware('auth');
Route::get('/{konser:slug}', [KonserController::class, 'show'])->middleware('auth');
Route::get('/datatiket/{konser:slug}/{ticket:id}', [KonserController::class, 'belitiket'])->middleware('auth');
Route::post('/checkout', [KonserController::class, 'process'])->middleware('auth');
Route::get('/checkout', [KonserController::class, 'process'])->middleware('auth');
Route::get('/checkout/{purchase}', [KonserController::class, 'checkout'])->middleware('auth')->name('checkout');
Route::get('/checkout/success/{purchase}', [KonserController::class, 'success'])->middleware('auth')->name('success');