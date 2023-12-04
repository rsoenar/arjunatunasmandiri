<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cost_type;
use App\Http\Controllers\Order_type;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/master/pelanggan', function () {
    return view('customer');
});

Route::get('/master/supir', function () {
    return view('driver');
});

Route::get('/master/kendaraan', function () {
    return view('car');
});

Route::get('master/master-biaya', [Cost_type::class, 'index'])->name('master-biaya');
Route::get('master/master-order', [Order_type::class, 'index'])->name('master-order');
