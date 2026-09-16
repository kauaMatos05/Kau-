<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductItensController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/itens', [ProductItensController::class, 'index'])->name('itens.index');
