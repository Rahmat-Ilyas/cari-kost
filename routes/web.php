<?php

Route::get('/', 'UserController@index')->name('home');
Route::get('/kost/detailkost/{id}', 'UserController@detailkost');
Route::post('/kost/search', 'UserController@search');

Route::group(['prefix' => 'owner'], function () { 
	Route::get('/login', 'Auth\LoginOwner@showLoginForm')->name('owner.login');
    Route::post('/login', 'Auth\LoginOwner@login')->name('owner.login.submit');
    Route::post('/logout', 'Auth\LoginOwner@logout')->name('owner.logout');
    Route::get('/regist', 'Auth\LoginOwner@showRegistForm');
    Route::post('/regist', 'Auth\LoginOwner@regist')->name('owner.regist.submit');
	Route::get('/', 'OwnerController@index')->name('owner.home');
	Route::get('/tambahkost', 'OwnerController@tambahkost');
	Route::get('/datakost', 'OwnerController@datakost');
	Route::post('/getdatakost', 'OwnerController@getdatakost');
	Route::post('/tambahkost', 'OwnerController@storedata');
	Route::get('/updatekost/{id}', 'OwnerController@viewupdate');
	Route::post('/updatekost', 'OwnerController@updatekost');
	Route::get('/hidenorview/{id}', 'OwnerController@hidenorview');
	Route::get('/hapuskost/{id}', 'OwnerController@hapuskost');
});

Route::group(['prefix' => 'admin'], function () { 
	Route::get('/login', 'Auth\LoginAdmin@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginAdmin@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\LoginAdmin@logout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin.home');
	Route::get('/dataowner', 'AdminController@dataowner');
	Route::get('/datakost', 'AdminController@datakost');
	Route::get('/kostview', 'AdminController@kostview');
	Route::get('/kosthide', 'AdminController@kosthide');
	Route::get('/kostdelete', 'AdminController@kostdelete');
});