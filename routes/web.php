<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function() {
	return view('login');
});
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');


Route::get('admin', function() {
	return view('admin.admin');
});
Route::get('manage_user/all_user', 'AdminController@manage_user');

Route::group(['prefix'=>'manage_user'], function(){
    Route::get('master_user', 'AdminController@manage_user');
    Route::post('add_user', 'AdminController@add_user');
    Route::get('page_edit_user', 'AdminController@page_edit_user');
    Route::get('edit_user/{id}', 'AdminController@edit_user');
    Route::post('update_user', 'AdminController@update_user');
    Route::post('delete_user', 'AdminController@delete_user');
});

Route::group(['prefix'=>'manage_type_news'], function(){
    Route::get('master_type_news', 'AdminController@manage_type_news');
    Route::post('add_type_news', 'AdminController@add_type_news');
    Route::get('edit_type_news/{id}', 'AdminController@edit_type_news');
    Route::post('update_type_news', 'AdminController@update_type_news');
    Route::post('delete_type_news', 'AdminController@delete_type_news');
});

Route::group(['prefix'=>'manage_sub_type_news'], function(){
    Route::get('master_sub_type_news', 'AdminController@manage_sub_type_news');
    Route::post('add_sub_type_news', 'AdminController@add_sub_type_news');
    Route::get('edit_sub_type_news/{id}', 'AdminController@edit_sub_type_news');
    Route::post('update_sub_type_news', 'AdminController@update_sub_type_news');
    Route::post('delete_sub_type_news', 'AdminController@delete_sub_type_news');
});

Route::group(['prefix'=>'manage_post'], function(){
    Route::get('all_post', 'AdminController@manage_post');
    Route::get('post_news', 'AdminController@post_news');
    Route::post('add_post', 'AdminController@add_post');
    Route::get('edit_post/{id}', 'AdminController@edit_post');
    Route::post('update_post', 'AdminController@update_post');
    Route::post('delete_post', 'AdminController@delete_post');
    Route::get('my_post', 'AdminController@my_post');
});

Route::group(['prefix'=>'manage_setting'], function(){
    Route::get('edit_profile', 'AdminController@edit_profile');
    Route::get('update_profile', 'AdminController@update_profile');
});

Route::post('uploadimagedrag', 'ImageController@uploadDragAndDropCKEDITOR');
Route::post('uploadimagefilebrowser', 'ImageController@uploadFileBrowserCKEDITOR');