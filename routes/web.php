<?php

use App\Http\Controllers\FrontController;
use Illuminate\Http\Request;
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

Route::get('/', [FrontController::class, 'home'])->name('home');


Route::get('/about-us', [FrontController::class,'about'])->name('about');

Route::get('/service',[FrontController::class,'service'])->name('service');

//Problem Create Hocce

// Route::get('/category/{category_name}',function($category_name){
//     echo $category_name;
// })->whereIn('category_name',['computer','laptop']);

// Route::get('/category/{category}', function ($category) {
//     return $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

// Route::get('/category/{category_name}', function ($category_name){
//     return $category_name;
//     })->whereIn('category_name', ['electronics', 'movie', 'books', 'watch', 'laptop']);

Route::get('/send-me-details',[FrontController::class,'SentMeDetails']);
