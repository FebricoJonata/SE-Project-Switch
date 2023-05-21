<?php

use App\Http\Controllers\BarangController;
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

// Route::get('/test', function () {
//     return view('cart');
// });

Route::get('/create-product', function(){
    return view('Dashboard.createProduct');
});

// Route::get('/catalog', function(){
//     return view('catalog');
// });

// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::get('/', [BarangController::class, 'showHomePage']);
Route::get('/catalog', [BarangController::class, 'showCatalogPage']);
Route::get('/detail/{id}', [BarangController::class, 'showItemByID']);

Route::get('/dashboard', [BarangController::class, 'showDashboard']);
Route::post('/dashboard/insert', [BarangController::class, 'store']);

Route::post('/register', [RegisterController::class, 'storeData']);

Route::post('/login', [LoginController::class, 'verify']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/cart', [BarangController::class, 'cart']);
Route::get('/add-cart/{id}', [BarangController::class, 'addToCart'])->name('add_to_cart');


