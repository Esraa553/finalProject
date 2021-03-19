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

Route::get('testFile',function(){
    return view('add');
});
Route::post('signIn','projectController@signIn');
Route::get('display','projectController@display');
Route::get('login','projectController@login');

Route::get('productFile',function(){
    return view('addProduct');
});

Route::post('addProduct','projectController@addProduct');

Route::get('displayProduct','projectController@displayProduct');

Route::get('delete/{id}','projectController@deletItem');

Route::get('showProduct/{id}','projectController@showProduct');

Route::post('editProduct','projectController@editProduct');
