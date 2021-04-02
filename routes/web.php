<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UnitesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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
Route::group(['middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('users')->group(function(){
        Route::get('/view',[UserController::class,'view'])->name('users.view');
        Route::get('/add',[UserController::class,'add'])->name('users.add');
        Route::post('/store',[UserController::class,'store'])->name('users.store');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('users.edit');
        Route::post('/update/{id}',[UserController::class,'update'])->name('users.update');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('users.delete');
    });
    Route::prefix('profile')->group(function(){
        Route::get('/view',[ProfileController::class,'view'])->name('profile.view');
        Route::get('/edit',[ProfileController::class,'edit'])->name('profile.edit');
        Route::post('/update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/change-password',[ProfileController::class,'changePassword'])->name('profile.change.password');
        Route::post('/updata-password',[ProfileController::class,'updatePassword'])->name('profile.update.password');
    });
    Route::prefix('suppliers')->group(function(){
        Route::get('/view',[SupplierController::class,'view'])->name('suppliers.view');
        Route::get('/add',[SupplierController::class,'add'])->name('suppliers.add');
        Route::post('/store',[SupplierController::class,'store'])->name('suppliers.store');
        Route::get('/edit/{id}',[SupplierController::class,'edit'])->name('suppliers.edit');
        Route::post('/update/{id}',[SupplierController::class,'update'])->name('suppliers.update');
        Route::get('/delete/{id}',[SupplierController::class,'delete'])->name('suppliers.delete');
    });
    Route::prefix('customers')->group(function(){
        Route::get('/view',[CustomerController::class,'view'])->name('customers.view');
        Route::get('/add',[CustomerController::class,'add'])->name('customers.add');
        Route::post('/store',[CustomerController::class,'store'])->name('customers.store');
        Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customers.edit');
        Route::post('/update/{id}',[CustomerController::class,'update'])->name('customers.update');
        Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('customers.delete');
    });
    Route::prefix('unites')->group(function(){
        Route::get('/view',[UnitesController::class,'view'])->name('unites.view');
        Route::get('/add',[UnitesController::class,'add'])->name('unites.add');
        Route::post('/store',[UnitesController::class,'store'])->name('unites.store');
        Route::get('/edit/{id}',[UnitesController::class,'edit'])->name('unites.edit');
        Route::post('/update/{id}',[UnitesController::class,'update'])->name('unites.update');
        Route::get('/delete/{id}',[UnitesController::class,'delete'])->name('unites.delete');
    });
    Route::prefix('categorys')->group(function(){
        Route::get('/view',[CategoryController::class,'view'])->name('categorys.view');
        Route::get('/add',[CategoryController::class,'add'])->name('categorys.add');
        Route::post('/store',[CategoryController::class,'store'])->name('categorys.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('categorys.edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('categorys.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('categorys.delete');
    });
    Route::prefix('products')->group(function(){
        Route::get('/view',[ProductsController::class,'view'])->name('products.view');
        Route::get('/add',[ProductsController::class,'add'])->name('products.add');
        Route::post('/store',[ProductsController::class,'store'])->name('products.store');
        Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
        Route::post('/update/{id}',[ProductsController::class,'update'])->name('products.update');
        Route::get('/delete/{id}',[ProductsController::class,'delete'])->name('products.delete');
    });
});
