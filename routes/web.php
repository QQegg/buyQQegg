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

Route::group(['prefix' => 'dislikecategory'], function() {
    Route::get('/create',['as'=>'dccreate','uses'=>'DislikeCategoryController@create']);
    Route::post('/store',['as' => 'dcstore' ,'uses'=>'DislikeCategoryController@store']);
    Route::get('/edit/{id}',['as'=>'dcedit','uses'=>'DislikeCategoryController@edit']);
    Route::patch('/update/{id}',['as'=>'dcupdate','uses'=>'DislikeCategoryController@update']);
    Route::delete('/destroy/{id}',['as'=>'dcdestroy','uses'=>'DislikeCategoryController@destroy']);
});

Route::group(['prefix' => 'comment'], function() {
    Route::get('/create',['as'=>'comcreate','uses'=>'CommentController@create']);
    Route::post('/store',['as' => 'comstore' ,'uses'=>'CommentController@store']);
    Route::get('/edit/{id}',['as'=>'comedit','uses'=>'CommentController@edit']);
    Route::patch('/update/{id}',['as'=>'comupdate','uses'=>'CommentController@update']);
    Route::delete('/destroy/{id}',['as'=>'comdestroy','uses'=>'CommentController@destroy']);
});

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

Route::post('change/password', ['as' => 'posts.update', 'uses' => 'ChangeMemberController@update']);
//Route::post('change/password',function (Request $request){
//    $User=User::find(Auth::user()->id);
//    $User->update($request->all());
//    return back()->with('success','Password Changed');
//    if(Hash::check(Input::get('passwordold'),$User['password']) && Input::get('password') ==Input::get('password_confirmation')){
//        $User->password =bcrypt(Input::get('password'));
//        $User->save();
//        return back()->with('success','Password Changed');
//    }
//    else
//        return back()->with('error','Password not changed');
//});
