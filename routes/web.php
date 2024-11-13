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

Route::get('/', [WelcomeController::class, 'welcome']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/jaja', [DashboardController::class, 'jaja'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    // Rutas de recursos
    Route::resource('/categoria', CategoriaController::class);
    Route::resource('/producto', ProductoController::class);
    Route::resource('/venta', VentaController::class);
    Route::resource('/cliente', ClienteController::class);
    Route::resource('/proveedor', ProveedorController::class);

   


    // Rutas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta PDF
    Route::get('/pdfProductos', [PdfController::class, 'pdfProductos'])->name('pdf.productos');

   
});

require __DIR__.'/auth.php';
