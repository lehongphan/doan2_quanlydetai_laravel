<?php
use App\Sinhvien;
Route::view('/', 'auth/login');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/giangvien', 'Auth\LoginController@showWriterLoginForm')->name('login.giangvien');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/giangvien', 'Auth\RegisterController@showWriterRegisterForm')->name('register.giangvien');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/giangvien', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/giangvien', 'Auth\RegisterController@createWriter')->name('register.giangvien');

Route::post('admin/sinhvien/register', 'Auth\RegisterController@createSinhVien')->name('register.sinhvien');



Route::group(['middleware' => 'auth'], function () {
    Route::view('/home', 'home');
    Route::resource('/detaisv','DeTaiSVController');
});
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin.home');
    Route::resource('/admin/sinhvien','DataSinhVienController');
    Route::resource('/admin/giangvien','DataGiangVienController');
    Route::resource('/admin/khoa','KhoaController');
    Route::resource('/admin/nganh','NganhController');
    Route::resource('/admin/chuyennganh','ChuyenNganhController');
    
});
Route::group(['middleware' => 'auth:giangvien'], function () {
    Route::view('/giangvien', 'giangvien.home');
    Route::resource('/giangvien/detai','DeTaiController');
    Route::resource('/giangvien/detaiddk','DeTaiDDKController');
    Route::post('/giangvien/detai/nienkhoa', 'DeTaiController@nienkhoa')->name('detai.nienkhoa');
    
});
