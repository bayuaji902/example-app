<?php

use App\Http\Controllers\HelloController;
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
    return "Hello World";
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/page2', [HelloController::class, 'page2']);
Route::get('/page3', [HelloController::class, 'page3']);