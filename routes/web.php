<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/category',[CategoryController::class,'index']);
    
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});
