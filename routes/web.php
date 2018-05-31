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

Route::group(['domain'=>'www.ctoblogs.{flag}'],function(){
	Route::get('/', function ($flag) {
	    return view($flag);
	});
});

Route::namespace('admin')->group(function () {
    // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
    Route::post('/login','LoginController@store');
    Route::resource('/question','QuestionController');
});

Route::namespace('home')->group(function () {
    // 在 "App\Http\Controllers\Home" 命名空间下的控制器
    Route::resource('/question','QuestionController');

    Route::resource('/topics','TopicsController');

    Route::resource('/article','ArticleController');

    Route::resource('/user','UserController');

});

Auth::routes();

