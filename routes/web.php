<?php

use App\Http\Controllers\BookController;
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


// Route::get('/', function () {
//     return view('list');
// });

Route::get('/', [BookController::class, 'index']);
Route::get('/filter', [BookController::class, 'filter']);
Route::get('/insert', [BookController::class, 'insert']);