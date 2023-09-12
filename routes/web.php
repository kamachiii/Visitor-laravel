<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\RegisterController;

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


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login']);
    Route::post('/loginAction', [LoginController::class, 'loginAction']);

    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/registerAction', [RegisterController::class, 'registerAction']);
});


Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [VisitorController::class, 'index']);
    
});


Route::post('/logout', [LoginController::class, 'logout']);
