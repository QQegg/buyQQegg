<?php

//use Illuminate\Support\Facades\Input as input;
//use App\User;
//use Illuminate\Http\Request;

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

Route::group(['prefix' => 'comment'], function() {
    Route::get('/create',['as'=>'comcreate','uses'=>'CommentController@create']);
    Route::post('/store',['as' => 'comstore' ,'uses'=>'CommentController@store']);
    Route::get('/edit/{id}',['as'=>'comedit','uses'=>'CommentController@edit']);
    Route::patch('/update/{id}',['as'=>'comupdate','uses'=>'CommentController@update']);
    Route::delete('/destroy/{id}',['as'=>'comdestroy','uses'=>'CommentController@destroy']);
});

Route::get('posts', ['as' => 'posts.index', 'uses' => 'ChangeMemberController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'ChangeMemberController@show']);
Route::get('about', ['as' => 'posts.about', 'uses' => 'ChangeMemberController@about']);
Route::get('contact', ['as' => 'posts.contact', 'uses' => 'ChangeMemberController@contact']);
Route::get('change/password/ww', ['as' => 'posts.password', 'uses' => 'ChangeMemberController@password']);

Route::post('change/profile', ['as' => 'posts.update', 'uses' => 'ChangeMemberController@update']);
Route::post('change/password/ww', ['as' => 'posts.change_password', 'uses' => 'ChangeMemberController@change_password']);

Route::group(['prefix' => 'product'], function() {
    Route::get('/index',['as'=>'prolist','uses'=>'ProductController@index']);
});
