<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;


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
// returns the home page with all posts
Route::get('/',function() {
    return view('welcome');
});

Route::get ('/category',[CategoryController::class, 'index'])->name('category.index');

Route::get ('/category/create',[CategoryController::class, 'create'])->name('category.create');

Route::post ('/category',[CategoryController::class, 'store'])->name('category.store');
Route::get ('/category/{category}/edit',[CategoryController::class, 'edit'])->name('category.edit');
Route::put ('/category/{category}/update',[CategoryController::class, 'update'])->name('category.update');
Route::delete ('/category/{category}/destroy',[CategoryController::class, 'destroy'])->name('category.destroy');

Route::get ('/transaction',[TransactionController::class, 'index'])->name('transaction.index');
Route::get ('/transaction/create',[TransactionController::class, 'create'])->name('transaction.create');

Route::post ('/transaction',[TransactionController::class, 'store'])->name('transaction.store');
Route::get ('/transaction/{transaction}/edit',[TransactionController::class, 'edit'])->name('transaction.edit');
Route::put ('/transaction/{transaction}/update',[TransactionController::class, 'update'])->name('transaction.update');
Route::delete ('/transaction/{transaction}/destroy',[TransactionController::class, 'destroy'])->name('transaction.destroy');