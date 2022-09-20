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

Route::name('web.')->group(function () {
    Route::get('/', function () { return view('web.home'); })->name('home');
});

Route::name('dashboard.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::get('/typography', [DashboardController::class, 'typography'])->name('typography');
    Route::get('/forms', [DashboardController::class, 'forms'])->name('forms');
    Route::get('/buttons', [DashboardController::class, 'buttons'])->name('buttons');
    Route::get('/blank', [DashboardController::class, 'blank'])->name('blank'); 

    Route::prefix('components')->name('components.')->group(function () {
        Route::get('/alerts', [DashboardController::class, 'alerts'])->name('alerts'); 
        Route::get('/collapse', [DashboardController::class, 'collapse'])->name('collapse'); 
        Route::get('/dropdown', [DashboardController::class, 'dropdown'])->name('collapse'); 
    });
});