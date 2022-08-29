<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});


Auth::routes();

Route::middleware("auth")
  ->namespace("Admin") //namespace =  indica la cartella dove si trovano i controller
  ->name("admin.") //name =  Aggiunge prima del nome di ogni rotta questo prefisso
  ->prefix("admin") //prefix =  Aggiunge prima di ogni URI questo prefisso
  ->group(function () {
    Route::get('/', 'HomeController@index')->name('index');    
    Route::resource("posts", "PostController");
    Route::resource("users" , "UserController");
    Route::get("/posts/filter/{post}", "PostController@filter")->name("posts.filter");
  });



  Route::get('/public', function () {
    return view('public');
})->name('public');
