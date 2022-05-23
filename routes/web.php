<?php

use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function (){

    Route::get('/',[\App\Http\Controllers\PageController::class,'index']);
    Route::get('/example',[\App\Http\Controllers\PageController::class,'index']);
    Route::get('/about',[\App\Http\Controllers\PageController::class,'index']);
    Route::get('/contact',[\App\Http\Controllers\PageController::class,'index']);
    Route::get('/category/{id}',[\App\Http\Controllers\PageController::class,'index']);
    Route::get('/detail/{id}',[\App\Http\Controllers\PageController::class,'index']);
    Route::post('/send-contact',[\App\Http\Controllers\PageController::class,'saveContact'])->name('contact.save');

});


Route::get('/logout',[HomeController::class,'logout'])->name('auth.out');


Auth::routes();

Route::prefix('dashboard')->middleware('auth')->group(function(){

    Route::get('/index',[HomeController::class,'index'])->name('page.index');
    Route::resource('category', CategoryController::class);
    Route::resource('article',ArticleController::class);
    Route::resource('article-category',ArticleCategoryController::class);

});
