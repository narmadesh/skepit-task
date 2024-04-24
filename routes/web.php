<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
    return view('welcome');
});

Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','verified','admin']], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('dashboard', AdminDashboardController::class);
    });
});

Route::group(['middleware' => ['auth','verified','user']], function () {
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::resource('dashboard', UserDashboardController::class);
    });
});