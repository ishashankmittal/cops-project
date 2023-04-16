<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::get('/login',[CustomAuthController::class, 'login'])->name('login')->middleware('youLoggedIn');
Route::get('/registration',[CustomAuthController::class, 'registration'])->middleware('youLoggedIn');
Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class, 'logout']);
