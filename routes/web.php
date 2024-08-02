<?php

use App\Http\Controllers\Beranda;
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

Route::get('/', [Beranda::class,'index']);
Route::get('edukasi', [Beranda::class,'edukasi']);
Route::get('gangguan', [Beranda::class,'gangguan']);
