<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::resource('/categoria',CategoriaController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/productos/productosindex', [ProductController::class, 'index'])->name('productos.index');
Route::get('/productos/agregar', [ProductController::class, 'agregar'])->name('productos.agregar');

  
});

require __DIR__.'/auth.php';
