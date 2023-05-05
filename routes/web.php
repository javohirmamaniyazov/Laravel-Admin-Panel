<?php

use App\Category;
use App\Http\Controllers\Admin\AdminsController;
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

    //DASHBOARD Route
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // CATEGORY Routes
    Route::get('/category',[CategoryController::class,'index']);
    Route::get('/category/create',[CategoryController::class,'create']);
    Route::post('category', [CategoryController::class,'store']);
    Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);
    Route::post('/category/{category}/update', [CategoryController::class, 'update']);
    Route::any('category/{category}/delete', [CategoryController::class, 'delete']);

    // ADMINs Route

    Route::get('/admins', [AdminsController::class, 'index']);

});
