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
Route::get('/testimonials',[PageController::class,"testimonials"])->name('testimonials');
Route::get('/services',[PageController::class,"services"])->name('services');
Route::get('/portfolio',[PageController::class,"portfolio"])->name('portfolio');
Route::get('/pricing',[PageController::class,"pricing"])->name('pricing');
Route::get('/blog', [PageController::class,"blog"])->name('blog'); 
Route::get('/blog-single',[PageController::class,"blog_single"])->name('blog_single'); 
Route::get('/contact',[PageController::class,"contact"])->name('contact'); 
Auth::routes();

Route::middleware(['htmltag'])->group(function(){
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class)->middleware(['can:CategoryCrud']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
