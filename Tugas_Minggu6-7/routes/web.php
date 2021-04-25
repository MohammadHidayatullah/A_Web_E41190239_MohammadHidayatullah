<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PengalamanKerjaController;

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

Route::get('/error', function () {
    return view('error');
})->name('error');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('roleAdmin');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('roleAdmin');

    // Route::resource('dashboard', 'DashboardController');
    // Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);
