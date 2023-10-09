<?php

use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\landing\KejadianController;
use App\Http\Controllers\landing\KerugianController;
use App\Http\Controllers\landing\KorbanController;
use App\Http\Controllers\landing\LaporController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('landing.home');
Route::get('/kerugian', [KerugianController::class, 'index'])->name('landing.kerugian');
Route::get('/korban', [KorbanController::class, 'index'])->name('landing.korban');
Route::get('/kejadian', [KejadianController::class, 'index'])->name('landing.kejadian');
Route::get('/lapor', [LaporController::class, 'index'])->name('landing.lapor');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
