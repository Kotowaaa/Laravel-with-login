<?php

use App\Http\Controllers\C_Barang;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    // Route Landing
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
    // Route Dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route view index barang
Route::get('/Barang', [C_Barang::class,'index']);
    // Route view form barang
Route::get('/Barang/Create', [C_Barang::class,'create']);
    // Route store form barang
Route::post('/Barang/Store', [C_Barang::class,'store']);
    // Route view edit form barang
Route::get('/Barang/{id}/Edit', [C_Barang::class,'edit']);
    // Route update form barang
Route::post('/Barang/{id}/Update', [C_Barang::class,'update']);
    // Route destroy form barang
Route::get('/Barang/{id}/Destroy', [C_Barang::class,'destroy']);
