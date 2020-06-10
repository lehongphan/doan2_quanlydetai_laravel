<?php
use App\Sinhvien;
Route::view('/', 'welcome');
Auth::routes();
Route::resource('admin/sinhvien','DataSinhVienController');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/giangvien', 'Auth\LoginController@showWriterLoginForm')->name('login.giangvien');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/giangvien', 'Auth\RegisterController@showWriterRegisterForm')->name('register.giangvien');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/giangvien', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/giangvien', 'Auth\RegisterController@createWriter')->name('register.giangvien');

Route::post('admin/sinhvien/register', 'Auth\RegisterController@createSinhVien')->name('register.sinhvien');




Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin.home');
    
});
Route::post('/giangvien/detai', 'PagesController@giangVienDeTai');
Route::group(['middleware' => 'auth:giangvien'], function () {
    Route::view('/giangvien', 'giangvien.home');
    Route::view('/giangvien/detai', 'giangvien.detai');
    
});
