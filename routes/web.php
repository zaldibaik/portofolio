<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', [UserController::class, 'show']);

Route::resource('categories', CategoryController::class);
