<?php

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

Route::get('/', [
    'uses' => 'BlogController@index',
]);

Route::get('/{post}', [
  'uses' => 'BlogController@show',
  'as' => 'blog.show'
]);

Route::get('/category/{category}', [
  'uses' => 'BlogController@category',
  'as' => 'category'
]);

Route::get('/author/{author}', [
  'uses' => 'BlogController@author',
  'as' => 'author'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
