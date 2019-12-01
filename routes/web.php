<?php


Route::get('/','HomeController@index')->name('index');
Route::get('chitiet/{id}','HomeController@chitiet')->name('chitiet');
Route::post('binhluan/{id}','CommentController@Them')->name('binhluan');
Route::get('/canhbao','HomeController@canhbao')->name('canhbao');
Route::get('/chitietcanhbao/{id}','HomeController@chitietcanhbao')->name('chitietcanhbao');
Route::get('/luatgiaothong','HomeController@luatgiaothong')->name('luatgiaothong');
Route::post('/luatgiaothong','HomeController@luatgiaothong')->name('luatgiaothong');

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::get('/index', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.form');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/users/index', 'UserController@index')->name('users.index');
    Route::post('/users/store', 'UserController@store')->name('users.store');
    Route::post('/users/update', 'UserController@update')->name('users.update');
    Route::post('/users/destroy', 'UserController@destroy')->name('users.destroy'); 

    Route::get('/canhbao/index', 'CanhBaoController@index')->name('canhbao.index');
    Route::post('/canhbao/store', 'CanhBaoController@store')->name('canhbao.store');
    Route::post('/canhbao/update', 'CanhBaoController@update')->name('canhbao.update');
    Route::post('/canhbao/destroy', 'CanhBaoController@destroy')->name('canhbao.destroy');
    Route::get('/canhbao/chitiet/{id}','CanhBaoController@chitiet')->name('canhbao.chitiet');

    Route::get('/theloai/index', 'TheLoaiController@index')->name('theloai.index');
    Route::post('/theloai/store', 'TheLoaiController@store')->name('theloai.store');
    Route::post('/theloai/update', 'TheLoaiController@update')->name('theloai.update');
    Route::post('/theloai/destroy', 'TheLoaiController@destroy')->name('theloai.destroy');

    Route::get('/loaitin/index', 'LoaiTinController@index')->name('loaitin.index');
    Route::post('/loaitin/store', 'LoaiTinController@store')->name('loaitin.store');
    Route::post('/loaitin/update', 'LoaiTinController@update')->name('loaitin.update');
    Route::post('/loaitin/destroy', 'LoaiTinController@destroy')->name('loaitin.destroy');

    Route::get('/tintuc/index', 'TinTucController@index')->name('tintuc.index');
    Route::post('/tintuc/store', 'TinTucController@store')->name('tintuc.store');
    Route::post('/tintuc/update', 'TinTucController@update')->name('tintuc.update');
    Route::post('/tintuc/destroy', 'TinTucController@destroy')->name('tintuc.destroy');
    Route::get('/tintuc/chitiet/{id}','TinTucController@chitiet')->name('tintuc.chitiet');

    Route::get('/luat/index', 'LuatController@index')->name('luat.index');
    Route::post('/luat/store', 'LuatController@store')->name('luat.store');
    Route::post('/luat/update', 'LuatController@update')->name('luat.update');
    Route::post('/luat/destroy', 'LuatController@destroy')->name('luat.destroy');
});

