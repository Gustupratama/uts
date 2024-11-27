<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\InventoryController;

Route::get('/', [InventoryController::class, 'index']);
Route::get('/users', [InventoryController::class, 'users'])->name('users');
Route::get('/categories', [InventoryController::class, 'categories'])->name('categories');
Route::get('/products', [InventoryController::class, 'products'])->name('products');
Route::get('/reports', [InventoryController::class, 'reports'])->name('reports');

