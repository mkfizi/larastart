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

Route::get('/', function () {
    return view('web.home');
});

Route::name('dashboard.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::get('/typography', [DashboardController::class, 'typography'])->name('typography');
    Route::get('/forms', [DashboardController::class, 'forms'])->name('forms');
    Route::get('/buttons', [DashboardController::class, 'buttons'])->name('buttons');

    Route::prefix('components')->name('components')->group(function () {
        Route::get('/alerts', [DashboardController::class, 'alerts'])->name('alerts'); 
    });
});