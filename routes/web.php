<?php

Auth::routes(['verify' => true]);

Route::get('/orders', 'OrdersController@index')->name('orders');
Route::post('/save_order', 'OrdersController@save_order')->name('save_order');
Route::post('/sort_order', 'OrdersController@sort_order')->name('sort_order');
Route::post('/select_category', 'OrdersController@select_category')->name('select_category');

Route::get('/orders/{id}', 'OrdersController@order')->middleware(['logged.in', 'new.order']);
Route::post('/add_proposal/{id}', 'OrdersController@add_proposal')->name('order');
Route::post('/select_worker/{id}', 'OrdersController@select_worker')->name('select_worker');
Route::post('/add_review/{id}', 'OrdersController@add_review')->name('add_review');
Route::post('/edit_order/{id}', 'OrdersController@edit_order')->name('edit_order');
Route::post('/delete_order/{id}', 'OrdersController@delete_order')->name('delete_order');

Route::get('/customers', 'UsersController@customers')->name('customers');

Route::get('/workers', 'UsersController@workers')->name('workers');

Route::get('/profile', 'UsersController@profile')->middleware('logged.in')->name('profile');
Route::post('/save_info', 'UsersController@save_info')->name('save_info');
Route::post('/save_contacts', 'UsersController@save_contacts')->name('save_contacts');
Route::post('/save_skills', 'UsersController@save_skills')->name('save_skills');
Route::post('/change_pass', 'UsersController@change_pass')->name('change_pass');
Route::post('/save_review', 'UsersController@save_review')->name('save_review');
Route::post('/save_about_me', 'UsersController@save_about_me')->name('save_about_me');

Route::get('/profile/{id}', 'UsersController@user')->name('user');

Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@index')->middleware('is.admin');
