<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/',[SiteController::class,'index']);
Route::get('/user',[SiteController::class,'exercicio2']);





// Route::get('/exit',[SiteController::class,'exit']);
// Route::get('/users/{quantidade}', [SiteController::class,'users']);