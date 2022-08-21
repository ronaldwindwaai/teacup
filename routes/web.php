<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;


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

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [AuthenticationController::class, 'login_basic'])->name('login');
    Route::get('register', [AuthenticationController::class, 'register_basic'])->name('register_basic');
});

Route::group(['middleware' => 'auth'], function(){
    // Main Page Route
    Route::get('/', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');

    /* Route Dashboards */
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('analytics', [DashboardController::class, 'dashboardAnalytics'])->name('dashboard-analytics');
        Route::get('ecommerce', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');
    });

});


/* Route Dashboards */
