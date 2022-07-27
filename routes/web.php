<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/contact/check', [TestController::class, 'check']);
Route::post('/contact/check', [TestController::class, 'store']);
Route::get('/contact/thanks', [TestController::class, 'complete']);

Route::get('/contact/control', [TestController::class, 'control']);
Route::post('/contact/control', [TestController::class, 'search']);
Route::post('/contact/delete', [TestController::class, 'delete']);