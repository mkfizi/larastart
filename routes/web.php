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
    Route::get('/home', [DashboardController::class, 'home'])->name('home');
    Route::get('/typography', [DashboardController::class, 'typography'])->name('typography');
});