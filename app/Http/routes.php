<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台路由组
Route::group(array(), function()
{
    Route::group(['namespace' => 'User'], function () {
        Route::get('/', 'IndexController@index');
        Route::delete('/articles/{id}', 'IndexController@del')->name('articles.destroy');
    });
});


//后台路由组
Route::group(['prefix' => 'Admin'], function()
{
    Route::group(['namespace' => 'Admin','as' => 'admin::'], function() {
        Route::get('/', 'IndexController@test');
    });
});

//API路由组
Route::group(['prefix' => 'api', 'namespace' => 'Api'], function(){
    Route::any('/', 'RouterController@index');  // API 入口
});