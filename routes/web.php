<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index');
Route::get('/pizza/{id}', [PizzaController::class, 'show'])->name('pizza.show');
Route::post('/pizza/{id}/confirm-order', [PizzaController::class, 'confirmOrder'])->name('pizza.confirmOrder');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
