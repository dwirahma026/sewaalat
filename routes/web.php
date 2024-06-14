<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('dwlogin');
});

Route::get('/daftar', function () {
    return view('dwdaftar');
});

Route::get('/dashboardpenyewa', function () {
    return view('dwdashboardpenyewa');
});

Route::get('/dashboardadmin', function () {
    return view('dwadmindashboard');
});

Route::get('/pesananadmin', function () {
    return view('dwadminpesanan');
});

Route::get('/produkadmin', function () {
    return view('dwadminproduk');
});

Route::get('/lihatprodukadmin', function () {
    return view('dwadminlihatproduk');
});

Route::get('/rincianpesananadmin', function () {
    return view('dwadminrincianpesanan');
});

Route::get('/editprodukadmin', function () {
    return view('dwadmineditproduk');
});

Route::get('/pesanan', function () {
    return view('dwpesanan');
});

Route::get('/rincianpesanan', function () {
    return view('dwrincianpesanan');
});

Route::get('/keranjang', function () {
    return view('arkeranjang');
});

Route::get('/pembayaran', function () {
    return view('arpembayaran');
});

Route::get('/kodebooking', function () {
    return view('arkodebooking');
});