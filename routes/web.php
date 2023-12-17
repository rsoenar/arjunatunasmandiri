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

Route::group(['prefix' => 'master/'], function () {
    Route::get('pelanggan', function () {
        return view('customer');
    });
    Route::get('supir', function () {
        return view('driver');
    })->name('driver');
    Route::get('kendaraan', function () {
        return view('car');
    });

    Route::get('master-biaya', [Cost_type::class, 'index'])->name('master-biaya');
    Route::get('master-order', [Order_type::class, 'index'])->name('master-order');
});

Route::group(['prefix' => 'master/kendaraan/'], function () {
    Route::get('input', function () {
        return view('car-input');
    })->name('car-input');

    Route::get('/{id}/edit', function () {
        return view('car-edit');
    })->name('car-edit');

     Route::get('/{id}/detail', function () {
        return view('livewire.car-detail');
    })->name('car-detail');
});

Route::group(['prefix' => 'master/supir/'], function () {
    Route::get('input', function () {
        return view('driver-input');
    })->name('driver-input');

    Route::get('/{id}/edit', function () {
        return view('driver-edit');
    })->name('driver-edit');
});

Route::group(['prefix' => 'master/pelanggan/'], function () {
    Route::get('input', function () {
        return view('customer-input');
    })->name('customer-input');
});

Route::group(['prefix' => "transaksi"], function () {
    Route::get('trans-service', function () {
        return view('trans-service');
    })->name('trans-service');
});
