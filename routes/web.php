<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
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
