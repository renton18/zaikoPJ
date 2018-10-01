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
    return view('/auth/login');
});

Route::get('topmenu', 'ZaikoController@index');

// Route::resource('zaikos', 'ZaikoController');
Route::group(['prefix' => 'zaikos'], function () {
    //一覧
    Route::get('', 'ZaikoController@index');
    //新規作成
    Route::get('create', 'ZaikoController@create'); //入力
    Route::patch('create', 'ZaikoController@createConfirm'); //確認
    Route::post('create', 'ZaikoController@store'); //保存
    //削除
    Route::post('delete/{id}/', 'ZaikoController@delete');
});

// Route::group(['prefix' => 'user'], function () {
//     Route::get('create', 'UserController@create'); //入力
//     Route::post('create', 'UserController@store'); //保存
//     Route::get('login', 'UserController@getLogin'); //入力
//     Route::post('login', 'UserController@postLogin'); //認証
// });

Route::resource('history', 'HistoryController');
Route::resource('item', 'ItemController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
