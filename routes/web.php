<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top',[StoreController::class ,'index']);

Route::post('/login',[StoreController::class,'login']);
Route::get('/login_top',[StoreController::class,'login_top']);

Route::get('/menu',[ProductController::class,'index']);