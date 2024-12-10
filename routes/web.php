<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoriteController;
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

Route::get('/', [UserController::class, 'index']);

Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/login', [AdminController::class, 'loginPage'])->name('admin.login');

Route::post('/login', [UserController::class, 'login']);
Route::get('/login', [UserController::class, 'loginPage'])->name('register');

Route::post('/register', [UserController::class, 'register']);
Route::get('/register', [UserController::class, 'registerPage'])->name('register');

Route::middleware('auth.admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::get('/dashboard/addProduct', [ProductController::class, 'create']);
    Route::post('/dashboard/storeProduct', [ProductController::class, 'store']);
    Route::get('/dashboard/editProduct/{id}', [ProductController::class, 'edit']);
    Route::post('/dashboard/updateProduct', [ProductController::class, 'update']);
    Route::get('/dashboard/deleteProduct/{id}', [ProductController::class, 'destroy']);
    Route::get('/dashboard/restoreProduct/{id}', [ProductController::class, 'restore']);
    
    Route::get('/dashboard/addCollection', [CollectionController::class, 'create']);
    Route::post('/dashboard/storeCollection', [CollectionController::class, 'store']);
    Route::get('/dashboard/editCollection/{id}', [CollectionController::class, 'edit']);
    Route::post('/dashboard/updateCollection', [CollectionController::class, 'update']);
    Route::get('/dashboard/deleteCollection/{id}', [CollectionController::class, 'destroy']);
    Route::get('/dashboard/restoreCollection/{id}', [CollectionController::class, 'restore']);

    Route::get('/dashboard/products', [AdminController::class, 'products']);
    Route::get('/dashboard/collections', [AdminController::class, 'collections']);
    Route::get('/dashboard/users', [AdminController::class, 'users']);
    Route::get('/dashboard/orderItems/{id}', [AdminController::class, 'orderItems']);
    Route::get('/dashboard/orders', [AdminController::class, 'orders']);
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard/addAdmin', [AdminController::class, 'registerPage']);
    Route::post('/dashboard/storeAdmin', [AdminController::class, 'register']);

});

Route::middleware('auth.user')->group(function () {
    Route::get('/user', [UserController::class, 'authorizedUser']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/addToCart/{id}', [CartController::class, 'addToCart']);
    Route::get('/addToFavorite/{id}', [FavoriteController::class, 'addToFavorite']);
    Route::get('/removeFromFavorite/{id}', [FavoriteController::class, 'removeFromFavorite']);
    Route::post('/updateCartQuantity', [CartController::class, 'updateCartQuantity']);
    Route::get('/decreaseItem/{id}', [CartController::class, 'decreaseItem']);
    Route::get('/removeFromCart/{id}', [CartController::class, 'removeFromCart']);
    Route::get('/checkout/{subTotal}', [OrderController::class, 'checkout']);
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});
