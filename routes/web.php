<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/',[SiteController::class,'index']);
Route::get('/exit',[SiteController::class,'exit']);