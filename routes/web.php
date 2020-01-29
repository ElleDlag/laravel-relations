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

Route::redirect('/', '/posts')->name('posts.home');

Route::resource('posts', 'PostController') ;

Route::view('/testmail', 'mails.test');

//start raw here
Route::get('raw', 'Raw@rawValues') ->name('pages.raw');

//order by post id
Route::get('raw/post-id/asc', 'Raw@postIdAsc')  ->name('post-id.asc');
Route::get('raw/post-id/desc', 'Raw@postIdDesc') ->name('post-id.desc');

//order by post title
Route::get('raw/post-title/asc', 'Raw@postTitleAsc')  ->name('post-title.asc');
Route::get('raw/post-title/desc', 'Raw@postTitleDesc') ->name('post-title.desc');

//crud
Route::get('create', 'PostController@create') ->name('create.post');
Route::post('store', 'PostController@store') ->name('store.post');
