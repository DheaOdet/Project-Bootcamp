<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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


Route::get('/', [PageController::class, "index"]);
Route::get('/about', [PageController::class, "about"]);
Route::get('/contact', [PageController::class, "contact"]);
Route::get('/login', [PageController::class, "login"]);
Route::get('/register', [PageController::class, "register"]);
Route::get('/detail', [PageController::class, "detail"]);