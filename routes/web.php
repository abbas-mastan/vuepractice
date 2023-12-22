<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::get('customers/create/{id?}',[CustomerController::class,'create']);
Route::post('customers/store/{id?}',[CustomerController::class,'store']);
Route::resource('customers', CustomerController::class)
    ->only(['index','destroy']);


    Route::get('posts',[PostController::class,'index']);