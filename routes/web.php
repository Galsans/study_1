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

Route::get('kelas', [App\Http\Controllers\KelasController::class, 'index'])->name('kelas.index');
Route::get('kelas-create', [App\Http\Controllers\KelasController::class, 'create'])->name('kelas.create');
Route::post('kelas-store', [App\Http\Controllers\KelasController::class, 'store'])->name('kelas.store');
Route::get('kelas-edit/edit/{id}', [App\Http\Controllers\KelasController::class, 'edit'])->name('kelas.edit');
Route::post('kelas-update/{id}', [App\Http\Controllers\KelasController::class, 'update'])->name('kelas.update');
Route::delete('kelas-delete/{id}', [App\Http\Controllers\KelasController::class, 'destroy'])->name('kelas.destroy');
