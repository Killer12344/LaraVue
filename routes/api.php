<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

# For Article

Route::get('article',[ApiController::class,'article']);
Route::get('article/detail/{id}',[ApiController::class,'detail']);
Route::get('category',[ApiController::class,'category']);
Route::get('article/category/{id}',[ApiController::class,'orderByCat']);
