<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\UserController;
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
//     return view('welcome');
// });

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'checkLogin'])->name('login');
Route::get('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/register', [UserController::class, 'registrationRefer'])->name('register');
Route::post('/registration', [UserController::class, 'store'])->name('registration');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/referrals/create', [InviteController::class, 'create'])->name('referrals.create');
    Route::post('/referrals/create', [InviteController::class, 'store'])->name('referrals.create');
});
