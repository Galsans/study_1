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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware'=> ['auth', 'isAdmin'], 'prefix'=>'admin'], function () {
    // PACKAGE KELAS
    Route::get('kelas', [App\Http\Controllers\KelasController::class, 'index'])->name('kelas.index');
    Route::get('kelas-create', [App\Http\Controllers\KelasController::class, 'create'])->name('kelas.create');
    Route::post('kelas-store', [App\Http\Controllers\KelasController::class, 'store'])->name('kelas.store');
    Route::get('kelas-edit/edit/{id}', [App\Http\Controllers\KelasController::class, 'edit'])->name('kelas.edit');
    Route::post('kelas-update/{id}', [App\Http\Controllers\KelasController::class, 'update'])->name('kelas.update');
    Route::delete('kelas-delete/{id}', [App\Http\Controllers\KelasController::class, 'destroy'])->name('kelas.destroy');


    // PACKAGE SISWA
    Route::get('siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
    Route::get('siswa-create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
    Route::post('siswa-store', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
    Route::get('siswa-edit/edit/{id}', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('siswa-update/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('siswa-delete/{id}', [App\Http\Controllers\SiswaController::class, 'delete'])->name('siswa.delete');
});
