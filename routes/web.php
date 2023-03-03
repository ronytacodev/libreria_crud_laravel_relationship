<?php

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
    return view('welcome');
});

Auth::routes();

Route::resource('libros', App\Http\Controllers\LibroController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
