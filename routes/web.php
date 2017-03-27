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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix' => 'articles'],function(){
    Route::get('create', ['as' => 'create-article','uses' => 'ArticleController@create']);
    Route::post('add',['as' => 'add-article','uses' => 'ArticleController@add']);
    Route::get('edit/{id}', ['as' => 'edit-article','uses' => 'ArticleController@edit']);
    Route::post('update',['as' => 'update-article','uses' => 'ArticleController@update']);
    Route::get('overview', ['as' => 'overview-article','uses' => 'ArticleController@overview']);
    Route::get('overview/{id}', ['as' => 'overview-subject-article','uses' => 'ArticleController@subject']);
    Route::get('{id}', ['as' => 'article','uses' => 'ArticleController@getArticle']);
});
