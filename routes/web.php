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
	'uses' => 'PageController@home',
	'as' => 'page.home',
]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('article', 'ArticleController');

Route::resource('article.comment', 'Article\CommentController', [
	'only' => ['store'],
]);
