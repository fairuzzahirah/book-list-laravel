<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
Route::get('/buku', [BukuController::class,'index'])->name('buku.index');
Route::delete('/buku/{id}', 
[BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/create', 
[BukuController::class, 'create'])->name('buku.create');
Route::post('/buku/store', 
[BukuController::class,'store'])->name('buku.store');
Route::get('/buku/{id}/edit', 
[BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])
->name('buku.update');
