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

Route::get('/', 'Controller@welcome');
Route::get('about', 'Controller@about');
Route::get('contact', 'Controller@contact');
Route::get('detail_news', 'Controller@detail_news');

Route::get('login', function() {
	return view('login');
});
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

Route::get('admin', 'AdminController@welcome_admin');
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
    Route::post('update_profile', 'AdminController@update_profile');
});

Route::group(['prefix'=>'manage_feature'], function(){
    Route::get('feature_about', 'AdminController@feature_about');
    Route::post('feature_about/save', 'AdminController@feature_about_save');
    Route::get('feature_about/edit/{id}', 'AdminController@feature_about_edit');
    Route::post('feature_about/update', 'AdminController@feature_about_update');
    Route::post('feature_about/delete', 'AdminController@feature_about_delete');


    Route::get('feature_contact', 'AdminController@feature_contact');
    Route::post('feature_contact/save', 'AdminController@feature_contact_save');
    Route::get('feature_contact/edit/{id}', 'AdminController@feature_contact_edit');
    Route::post('feature_contact/update', 'AdminController@feature_contact_update');
    Route::post('feature_contact/delete', 'AdminController@feature_contact_delete');
});

Route::group(['prefix'=>'manage_advertisement'], function(){
    Route::get('feature_adv', 'AdminController@feature_adv');
    Route::post('feature_adv/save', 'AdminController@feature_adv_save');
    Route::get('feature_adv/edit/{id}', 'AdminController@feature_adv_edit');
    Route::post('feature_adv/update', 'AdminController@feature_adv_update');
    Route::post('feature_adv/delete', 'AdminController@feature_adv_delete');

    Route::get('data_customer', 'AdminController@data_customer');
    Route::post('data_customer/save', 'AdminController@data_customer_save');
    Route::get('data_customer/edit/{id}', 'AdminController@data_customer_edit');
    Route::post('data_customer/update', 'AdminController@data_customer_update');
    Route::post('data_customer/delete', 'AdminController@data_customer_delete');

    Route::get('master_adv', 'AdminController@master_adv');
    Route::post('master_adv/save', 'AdminController@master_adv_save');
    Route::get('master_adv/edit/{id}', 'AdminController@master_adv_edit');
    Route::post('master_adv/update', 'AdminController@master_adv_update');
    Route::post('master_adv/delete', 'AdminController@master_adv_delete');

});

Route::post('uploadimagedrag', ['as'=>'drag','uses'=>'ImageController@uploadDragAndDropCKEDITOR']);
Route::post('uploadimagefilebrowser', ['as'=>'upload','uses'=>'ImageController@uploadFileBrowserCKEDITOR']);