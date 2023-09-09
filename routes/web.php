<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/user', [DashboardController::class, 'index']);

Route::get('/', [DashboardController::class, 'home']);

Route::get('/home', [DashboardController::class, 'home']);

Route::get('/faq', [DashboardController::class, 'faq']);

Route::get('/contact', [DashboardController::class, 'contact']);

Route::get('/survania', [DashboardController::class, 'survania']);

Route::get('/unban-discord', [DashboardController::class, 'unbandiscord']);

Route::get('/unban-survania', [DashboardController::class, 'unbansurvania']);

Route::get('/registers', [DashboardController::class, 'register']);

Route::get('/logins', [DashboardController::class, 'login']);

Route::get('/terms', [DashboardController::class, 'terms']);

Route::get('/changer', [DashboardController::class, 'changer']);

Route::get('/profile', [DashboardController::class, 'profile']);