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

Auth::routes();
Route::get('/','FrontendController@create')->name('feedback.show');
Route::get('/home', 'FrontendController@show')->name('home');

Route::group(['middleware' => 'auth','prefix' => 'admin'],function(){
    Route::resource('tf_question','TFQuestionController');
    Route::resource('mc_question','MCQuestionController');
    Route::post('feedback','FrontendController@store')->name('feedback.store');
    Route::get('results','FrontendController@result')->name('feedback.result');
});


