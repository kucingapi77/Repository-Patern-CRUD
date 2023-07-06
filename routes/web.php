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

Route::resource('post','PostController');

//route menampilkan index

Route::get('/index', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/form', [App\Http\Controllers\PostController::class, 'isidata']);
Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->middleware('web');


Route::get('/tampil/{id}', [App\Http\Controllers\PostController::class, 'tampil']);
Route::get('/hapus/{id}', [App\Http\Controllers\PostController::class, 'destroy']);

Route::get('/show', [App\Http\Controllers\PostController::class, 'show']);
Route::post('/tampil/update/{id}', [App\Http\Controllers\PostController::class, 'update']);

