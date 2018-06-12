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

Route::group(['namespace'=>'admin'],function () {
    // 在 "App\Http\Controllers\Admin" 命名空间下的控制器

    //登录
    Route::post('adminlogin','AdminLoginController@store');

    //问题管理
    Route::resource('adminquestion','QuestionController');

    //首页展示
    Route::resource('adminindex','IndexController');

    //用户管理
    Route::resource('adminuser','UserController');

    //话题管理
    Route::resource('admintopic','TopicController');

    //用户回收站
    Route::get('recycleuser','RecycleUserController@index');

    //用户回收
    Route::get('recycleuser/recovery/{id}','RecycleUserController@recovery');

    //问题回收站
    Route::get('recyclequestion','QuestionController@recycle');

    //问题回收
    Route::get('recoveryquestion/{id}','QuestionController@recovery');

    //话题回收
    Route::get('recycletopic','TopicController@recycle');

});

Route::namespace('home')->group(function () {
    // 在 "App\Http\Controllers\Home" 命名空间下的控制器

    //问题
    Route::resource('/question','QuestionController');

    //话题
    Route::resource('/topics','TopicsController');

    //文章
    Route::resource('/article','ArticleController');

    //用户
    Route::resource('/user','UserController');

});

Auth::routes();

