<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Transaksi;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Transaksi::class, 'index'])->name('index');
Route::get('/', [Transaksi::class, 'index']);
Route::post('/', [Transaksi::class, 'insert'])->name('insert');
