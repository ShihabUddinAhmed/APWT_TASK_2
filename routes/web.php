<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
})->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginsuccess'])->name('login');

Route::get('/register', [LoginController::class, 'registration'])->name('register');
Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/contact', [LoginController::class, 'contact'])->name('contact');