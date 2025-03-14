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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function(){
    return 'Hello World';
});

Route::get('greeting/{name}', function($name){
    return 'Hello ' . $name;
});

Route::get('/hiYou',function(){
    return redirect('/greeting');
});

Route::get('hi2', function(){
    return redirect() ->route('greeting'); //redirect to route name greeting
});

Route::get('home', function(){
    return view('/');
});

