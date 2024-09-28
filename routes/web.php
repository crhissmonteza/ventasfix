<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por middleware de autenticación
Route::middleware(['auth'])->group(function () {
    
    // Rutas para el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Ruta para la lista de usuarios
    Route::get('/users', function () {
        return view('user-list');
    })->name('users');
    
    // Ruta para la lista de productos
    Route::get('/products', function () {
        return view('product-list');
    })->name('products');
    
    // Ruta para la lista de clientes
    Route::get('/customers', function () {
        return view('customer-list');
    })->name('customers');
});

require __DIR__.'/auth.php';

