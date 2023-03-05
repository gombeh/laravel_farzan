<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MotorbikeController;

Route::name('motorbikes.')->prefix('motorbikes')->group(function(){
    Route::get('create', [MotorbikeController::class, 'create'])->name('create');
    Route::post('/', [MotorbikeController::class, 'store'])->name('store');
});

