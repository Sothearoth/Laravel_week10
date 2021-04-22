<?php

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
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
Route::get('/',[PageController::class,"welcome"]);
Route::get('/aboutUs',[PageController::class,"aboutUs"] );

Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/team',[PageController::class,"team"]);

Route::get('/testimonials',[PageController::class,"testimonials"]);
Route::get('/services',[PageController::class,"services"]); 
Route::get('/portfolio',[PageController::class,"portfolio"]); 
Route::get('/pricing',[PageController::class,"pricing"]); 
Route::get('/blog', [PageController::class,"blog"]); 
Route::get('/blog-single',[PageController::class,"blog_single"]); 

Route::get('/contact',[PageController::class,"contact"]); 
Route::get('/index',[ProductController::class,"index"]); 



