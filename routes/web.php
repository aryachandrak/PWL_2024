<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/', [PageController::class,'index']);

//Basic Routing
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function() {
    return 'World';
});

Route::get('/welcome', function(){
    return "Selamat Datang";
});

Route:: get('/about', [PageController::class,'about']);

//Route Parameters
Route::get('/user/{name}', function($name){
    return "Nama saya ".$name;
});

//2 parameters
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return "Post ke-".$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', [PageController::class,'articles']);

//Optional parameters
Route::get('/user/{name?}', function ($name="John"){
    return "Nama saya ".$name;
});

//Route name
Route::get('/user/profile', function(){

})->name('namaprofile');


Route::get('/greeting', [WelcomeController::class,'greeting']);