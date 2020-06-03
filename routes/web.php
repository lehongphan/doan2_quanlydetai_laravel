<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/giangvien', 'Auth\LoginController@showWriterLoginForm')->name('login.giangvien');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/giangvien', 'Auth\RegisterController@showWriterRegisterForm')->name('register.giangvien');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/giangvien', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/giangvien', 'Auth\RegisterController@createWriter')->name('register.giangvien');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});

Route::group(['middleware' => 'auth:giangvien'], function () {
    Route::view('/giangvien', 'giangvien');
});
