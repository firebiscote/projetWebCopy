<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LocalityController, OfferController, StudentController};

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
    return view('welcome');
});

Route::resource('localities', LocalityController::class);
Route::delete('localities/force/{locality}', [LocalityController::class, 'forceDestroy'])->name('localities.force.destroy');
Route::put('localities/restore/{locality}', [LocalityController::class, 'restore'])->name('localities.restore');
Route::resource('offers', OfferController::class);
Route::delete('offers/force/{id}', [OfferController::class, 'forceDestroy'])->name('offers.force.destroy');
Route::put('offers/restore/{id}', [OfferController::class, 'restore'])->name('offers.restore');
Route::get('locality/{slug}/offers', [OfferController::class, 'index'])->name('offers.locality');
Route::resource('students', StudentController::class);
Route::get('center/{slug}/students', [StudentController::class, 'index'])->name('students.center');
Route::get('promotion/{slug}/students', [StudentController::class, 'index'])->name('students.promotion');
Route::get('search/students', [StudentController::class, 'search'])->name('students.search');