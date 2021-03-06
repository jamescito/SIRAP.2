<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pruebacontroller;
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

Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::resource('usuario','App\Http\Controllers\UserController');

Route::resource('venta','App\Http\Controllers\VentaController');
//Route::resource('prueba {$codigo}','App\Http\Controllers\PruebaController');
Route::get('prueba{codigo}',[PruebaController::class, 'show']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

