<?php

use App\Http\Controllers\DashboardController;
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

Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');
Route::view('/dashboard', 'dashboard');
Route::view('/sejarah', 'sejarah');
Route::view('/aksara', 'aksara');
Route::view('/', 'dashboard2');
Route::view('/sejarahforguest', 'sejarah2');
Route::view('/aksaraforguest', 'aksara2');
Route::view('/profile', 'profile');
Route::view('/kamus', 'kamus');
Route::get('/materi/{id?}', [DashboardController::class, 'show']);
Route::get('/kuis', [DashboardController::class, 'showQuiz'])->name('kuis.show');
Route::post('/kuis/selesai', [DashboardController::class, 'submitQuiz'])->name('kuis.submit');
Route::get('/kuis/review', [DashboardController::class, 'reviewQuiz'])->name('kuis.review');