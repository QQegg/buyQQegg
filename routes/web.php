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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dislikecategory'], function() {
    Route::get('/create',['as'=>'dccreate','uses'=>'DislikeCategoryController@create']);
    Route::post('/store',['as' => 'dcstore' ,'uses'=>'DislikeCategoryController@store']);
    Route::get('/edit/{id}',['as'=>'dcedit','uses'=>'DislikeCategoryController@edit']);
    Route::put('/update/{id}',['as'=>'dcupdate','uses'=>'DislikeCategoryController@update']);
    Route::delete('/destroy/{id}',['as'=>'dcdestroy','uses'=>'DislikeCategoryController@destroy']);
});

Route::group(['prefix' => 'comment'], function() {
    Route::get('/create',['as'=>'comcreate','uses'=>'CommentController@create']);
    Route::post('/store',['as' => 'comstore' ,'uses'=>'CommentController@store']);
    Route::get('/edit/{id}',['as'=>'comedit','uses'=>'CommentController@edit']);
    Route::put('/update/{id}',['as'=>'comupdate','uses'=>'CommentController@update']);
    Route::delete('/destroy/{id}',['as'=>'comdestroy','uses'=>'CommentController@destroy']);
});
