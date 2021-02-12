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


Route::get('/', 'ArticleController@Home');
Route::post('/', 'ArticleController@Store');

Route::get('/articles', 'ArticleController@Index');
Route::get('/articles/{article}', 'ArticleController@Show');

Route::get('/articles/{article}/edit', 'ArticleController@Edit');
Route::put('/articles/{article}', 'ArticleController@Update');

Route::get('/articles/{article}/delete', 'ArticleController@Delete');
Route::delete('/articles/{article}', 'ArticleController@Destroy');

