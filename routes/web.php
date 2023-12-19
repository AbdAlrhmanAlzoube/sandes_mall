<?php

use App\Http\Controllers\Admin\Cashier\CashierController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Admin.index');
});
Route::get('/Admin',function(){
    return view('Admin.index');
});

Route::resource('categories', CategoryController::class);   
Route::resource('products', ProductController::class);
Route::resource('cashiers', CashierController::class);