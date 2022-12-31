<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[Controller::class,'index'])->name('index');
Route::resource('product',ProductController::class)->except(['index','show'])->middleware('auth');
Route::resource('category',CategoryController::class)->middleware('auth');
Route::get('prodect.editproduct',[ProductController::class,'editproduct'])->name('editproduct')->middleware('auth');
Route::get('category.indexcategory',[CategoryController::class,'indexcategory'])->name('indexcategory')->middleware('auth');
Route::get('/show/{id}', [Controller::class, 'show'])->name('show');


