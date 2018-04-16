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

Route::get('noti','NotiController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'comment'], function() {
    Route::get('/create',['as'=>'comcreate','uses'=>'CommentController@create']);
    Route::post('/store/{id}',['as' => 'comstore' ,'uses'=>'CommentController@store']);
    Route::get('/edit/{id}',['as'=>'comedit','uses'=>'CommentController@edit']);
    Route::patch('/update/{id}',['as'=>'comupdate','uses'=>'CommentController@update']);
    Route::delete('/destroy/{id}',['as'=>'comdestroy','uses'=>'CommentController@destroy']);
});
Route::get('posts', ['as' => 'home', 'uses' => 'ChangeMemberController@home']);
Route::get('photo', ['as' => 'photo', 'uses' => 'ChangeMemberController@photo']);
Route::get('about', ['as' => 'about', 'uses' => 'ChangeMemberController@about']);
Route::get('change/profile', ['as' => 'contact', 'uses' => 'ChangeMemberController@contact']);
Route::get('codes', ['as' => 'codes', 'uses' => 'ChangeMemberController@codes']);
Route::get('services', ['as' => 'services', 'uses' => 'ChangeMemberController@services']);
Route::get('change/password/ww', ['as' => 'posts.password', 'uses' => 'ChangeMemberController@password']);
Route::post('change/profile', ['as' => 'change_profile', 'uses' => 'ChangeMemberController@update']);

Route::group(['prefix' => 'product'], function() {
    Route::get('/index',['as'=>'prolist','uses'=>'ProductsController@index']);
    Route::get('/detail/{id}',['as'=>'prodetail','uses'=>'ProductsController@detail']);
    Route::get('/search',['as'=>'prosearch','uses'=>'ProductsController@search']);
});

Route::group(['prefix' => 'store'], function() {
    Route::get('/index',['as'=>'stolist','uses'=>'StoresController@index']);
    Route::get('/detail/{id}',['as'=>'stodetail','uses'=>'StoresController@detail']);
    Route::get('/search',['as'=>'stosearch','uses'=>'StoresController@search']);
});

Route::post('change/password/ww', ['as' => 'change_password', 'uses' => 'ChangeMemberController@change_password']);

/*完工*/
Route::group(['prefix' => 'post'], function() {
    Route::get('/',['as'=>'postlist','uses'=>'PostsController@index']);
    Route::post('/store',['as' => 'poststore' ,'uses'=>'PostsController@store']);
    Route::get('/edit/{id}',['as'=>'postedit','uses'=>'PostsController@edit']);
    Route::post('/update/{id}',['as'=>'postupdate','uses'=>'PostsController@update']);
    Route::get('/destroy/{id}',['as'=>'postdestroy','uses'=>'PostsController@destroy']);
});
