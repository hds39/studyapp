<?php

use App\Models\Book;
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

Route::get('/', 'App\Http\Controllers\Bookcontroller@index')->middleware('auth');

Route::post('/book', 'App\Http\Controllers\Bookcontroller@post');

Route::delete('/book/{id}', 'App\Http\Controllers\Bookcontroller@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
