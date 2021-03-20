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
    Route::get('/view',[UserController::class,'view'])->name('view');
    Route::get('/add',[UserController::class,'view'])->name('users.add');
    Route::post('/store',[UserController::class,'view'])->name('users.store');
    Route::get('/edit/{is}',[UserController::class,'view'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class,'view'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class,'view'])->name('users.delete');
});
