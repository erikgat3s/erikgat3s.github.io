<?php

use App\Http\Controllers\AnakController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/anak', [App\Http\Controllers\AnakController::class, 'admin'])->name('anak');

Route::get('/anak/cari', [App\Http\Controllers\AnakController::class, 'cari']);

Route::post('/anak', [App\Http\Controllers\AnakController::class, 'create'])->name('add.anak');

Route::get('/anak/{id}/edit', [App\Http\Controllers\AnakController::class, 'edit']);

Route::post('/anak/{id}/update', [App\Http\Controllers\AnakController::class, 'update'])->name('update.anak');

Route::get('/anak/delete/{id}',  [App\Http\Controllers\AnakController::class, 'delete'])->middleware('auth', 'admin');

Route::get('/anak', [App\Http\Controllers\AnakController::class, 'index']);

//Route::get('/anak', function() {
//    return redirect('anak')->with('Gagal', 'Anda Tidak Memiliki Akses!');
//})->middleware('auth', 'admin');
