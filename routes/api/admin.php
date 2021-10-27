<?php

use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\Admin\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('admin/test',function(){
    return 'okk';
});

Route::group(['prefix' => 'admin'],function(){
    Route::post('/login',[AdminAuthController::class,'login'])->name('admin.login');

    Route::group(['middleware' => 'auth:admin-api','scopes:admin'],function(){
        Route::post('/logout',[AdminController::class,'login'])->name('admin.logout');
        Route::post('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    });

});