<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/admin/create', [ProductController::class, 'create']);
Route::post('/admin/store', [ProductController::class, 'store']);