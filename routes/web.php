<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('page');
Route::get('//cari_user', [App\Http\Controllers\pageController::class, 'user_cari'])->name('cari_user');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/pertanyaan', [App\Http\Controllers\PertanyaanController::class, 'index'])->name('pertanyaan');
    Route::get('/tambah', [App\Http\Controllers\PertanyaanController::class, 'tambah'])->name('tambah');
    Route::post('/pertanyaan/store', [App\Http\Controllers\PertanyaanController::class, 'store'])->name('store');
    Route::delete('/pertanyaan/{id}', [App\Http\Controllers\PertanyaanController::class, 'destroy'])->name('pertanyaan.delete');
    Route::get('/pertanyaan/cari', [App\Http\Controllers\PertanyaanController::class, 'cari'])->name('cari');
    Route::put('/pertanyaan/{id}', [App\Http\Controllers\PertanyaanController::class, 'update'])->name('pertanyaan.update');
    Route::get('/pertanyaan/{id}/edit', [App\Http\Controllers\PertanyaanController::class, 'edit'])->name('edit');
});
