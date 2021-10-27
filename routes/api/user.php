<?php

use App\Http\Controllers\Api\User\Auth\UserAuthController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user'],function(){
    Route::group(['prefix' => 'auth'],function(){
        Route::post('/login',[UserAuthController::class,'login'])->name('user.login');
        Route::post('/register',[UserAuthController::class,'register'])->name('user.register');
    });

    Route::group(['middleware' => 'auth:user-api','scopes:user'],function(){
        Route::post('/logout',[UserController::class,'logout'])->name('user.logout');
        Route::post('/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
    });

});