<?php

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

Route::get('atores', [\App\Http\Controllers\AtoresController::class, 'index']);
Route::get('atores/create', [\App\Http\Controllers\AtoresController::class, 'create']);
Route::post('atores/store', [\App\Http\Controllers\AtoresController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


