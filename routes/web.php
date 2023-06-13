<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/create-product', function(){
    return view('Dashboard.createProduct');
});

Route::get('/', [BarangController::class, 'showHomePage'])->name('home');
Route::get('/catalog', [BarangController::class, 'showCatalogPage']);
Route::get('/detail/{id}', [BarangController::class, 'showItemByID']);

Route::post('/register', [RegisterController::class, 'storeData']);

Route::post('/login', [LoginController::class, 'verify']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    Route::get('/cart', [CartController::class, 'cart']);
    Route::get('/add-cart/{id}', [CartController::class, 'addToCart']);
    Route::get('/del-cart/{id}', [CartController::class, 'deletecart']);
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/dashboard', [BarangController::class, 'showDashboard']);
    Route::post('/dashboard/insert', [BarangController::class, 'store']);
    Route::delete('/dashboard/{id}', [BarangController::class, 'destroy']);
    Route::get('/dashboard/update/{id}', [BarangController::class, 'getBarangById']);
    Route::patch('/dashboard/update/{id}', [BarangController::class, 'update']);
});