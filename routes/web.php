<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', function () {
    return view('products');  // nama file view di resources/views/produk.blade.php
});
Route::get('/products/{id}', [ProductDetailController::class, 'show'])->name('products.detail');

Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/admin/create', [ProductController::class, 'create']);
Route::post('/admin/store', [ProductController::class, 'store']);