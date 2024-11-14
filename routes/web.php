<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ClienteController; 
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Ruta principal
Route::get('/', [WelcomeController::class, 'welcome']);

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Rutas de recursos
    Route::resource('/categoria', CategoriaController::class);
    Route::resource('/producto', ProductoController::class);
    Route::resource('/venta', VentaController::class);
    Route::resource('/cliente', ClienteController::class);
    Route::resource('/proveedor', ProveedorController::class);

    // Ruta de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta PDF
    Route::get('/pdfProductos', [PdfController::class, 'pdfProductos'])->name('pdf.productos');

    // Ruta de Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/jaja', [DashboardController::class, 'jaja']);
});

// Rutas de autenticación (login, registro, etc.)
Auth::routes(); // Solo aquí, no dentro del grupo 'auth'

// Requiere las rutas de autenticación del archivo 'auth.php'
require __DIR__.'/auth.php';
