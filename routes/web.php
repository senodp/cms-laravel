<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\DashboardController;
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

Auth::routes();

Route::get('/users', [UserConstroller::class, 'index']);

Route::view('/dashboard', 'backend.dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['as'=>'app.', 'prefix'=>'app', 'middleware'=>['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Route::view('/dashboard', 'backend.dashboard');
});
