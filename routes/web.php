<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

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

Route::get('/bersuaproject', function () {
    return view('bersuaproject');
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