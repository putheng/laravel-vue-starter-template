<?php

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('api/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	Route::get('admin', 'AdminController@index');
});

Route::group(['prefix' => 'vendor', 'namespace' => 'Vendor'], function(){
	Route::get('admin', 'VendorController@index');
});

/* Admin */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => ['role:admin']], function(){

	Route::get('/{vue?}', 'HomeController@index')->name('index')->where('vue', '[\/\w\.-]*');

});

/* Vendor */
Route::group(['prefix' => 'vendor', 'namespace' => 'Vendor', 'as' => 'vendor.', 'middleware' => ['role:vendor']], function(){

	Route::get('/{vue?}', 'HomeController@index')->name('index')->where('vue', '[\/\w\.-]*');

});

Route::get('/role', function(){
	dd(auth()->user()->role);
});