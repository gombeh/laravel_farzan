<?php

use App\Http\Controllers\Front\MotorbikeController;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [MotorbikeController::class, 'index'])->name('front.motorbikes.index');
Route::get('/motorbikes/{motorbike}', [MotorbikeController::class, 'show'])->name('front.motorbikes.show');




