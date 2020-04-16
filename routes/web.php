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
// Xử lý đăng nhập cho trang admin
Route::get('dang-nhap-admin', 'AuthController@getLogin')->name('getDangnhap');
Route::post('dang-nhap-admin','AuthController@authLogin')->name('dangnhap');

// ->middleware('checkUser')
Route::group(['prefix' => 'admin', 'middleware' => 'checkUser'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::get('/dang-xuat','AuthController@logoutAdmin')->name('dangxuat');

    //Các route này của Loại sản phẩm
    Route::get('loai', 'LoaiController@index')->name('danhsachloai');

    Route::post('loai','LoaiController@store')->name('themloai');

    Route::get('loai/{id}/edit','LoaiController@edit')->name('sualoai');

    Route::post('loai/{id}/edit', 'LoaiController@update')->name('capnhatloai');

    Route::get('loai/{id}/delete','LoaiController@destroy')->name('xoaloai');


    //xuất xứ sản phẩm
    Route::get('xuatxu', 'XuatxuController@index')->name('danhsachxuatxu');

    Route::post('xuatxu','XuatxuController@store')->name('themxuatxu');

    Route::get('xuatxu/{id}/edit','XuatxuController@edit')->name('suaxuatxu');

    Route::post('xuatxu/{id}/edit', 'XuatxuController@update')->name('capnhatxuatxu');

    Route::get('xuatxu/{id}/delete','XuatxuController@destroy')->name('xoaxuatxu');

    //Lô hàng
    Route::get('lo', 'LoController@index')->name('danhsachlo');

    Route::post('lo','LoController@store')->name('themlo');

    Route::get('lo/{id}/edit','LoController@edit')->name('sualo');

    Route::post('lo/{id}/edit', 'LoController@update');

    Route::get('lo/{id}/detail','LoController@show')->name('chitietlo');

    Route::post('lo/{id}/update','ChitietloController@update')->name('capnhatlo');

    Route::get('lo/{id}/delete','LoController@destroy')->name('xoalo');

    //Sản phẩm
    Route::get('sanpham', 'SanphamController@index')->name('danhsachsanpham');

    Route::post('sanpham','SanphamController@store')->name('themsanpham');

    Route::get('sanpham/{id}', 'SanphamController@show')->name('chitietsanpham');

    Route::get('sanpham/hethang/{id}', 'SanphamController@hethang')->name('hethang');
    Route::get('sanpham/conhang/{id}', 'SanphamController@conhang')->name('conhang');
    Route::get('sanpham/khuyemmai/{id}', 'SanphamController@khuyenmai')->name('khuyenmaisanpham');

    Route::get('sanpham/khuyenmai-reset/{id}' , 'SanphamController@resetGia')->name('resetGia');

    Route::get('sanpham/{id}/edit','SanphamController@edit')->name('suasanpham');

    Route::post('sanpham/{id}/edit', 'SanphamController@update')->name('capnhatsanpham');

    Route::get('sanpham/{id}/delete','SanphamController@destroy')->name('xoasanpham');
    Route::post('sanpham/nhap-hang', 'SanphamController@nhapHang')->name('nhaphang');

    Route::get('sanpham/{id}/cap-nhat-gia-ban','SanphamController@CapNhatGiaBan')->name('capnhatgiaban');

    //Hình ảnh cho sản phẩm
    Route::get('sanpham/{id}/hinhanh','HinhanhController@create')->name('themhinhanh');
    Route::post('sanpham/hinhanh', 'HinhanhController@store')->name('themhinhanh2222');
    Route::get('sanpham/{idHA}/{idSP}/ha-delete','HinhanhController@destroy')->name('xoahinhanh');
    Route::get('sanpham/{id}/{tenHA}','SanphamController@getAvata')->name('datanhdaidien');
    //Công dụng
    Route::get('congdung', 'CongdungController@index')->name('danhsachcongdung');







    //quản lý banner
    Route::get('banner','BannerController@index')->name('banner');
    Route::post('banner/say-some-thing','BannerController@store');
});


//Xử lý trang chủ cho người dùng
Route::get('/', 'TrangchuController@index')->name('trangchu');
Route::get('/gioi-thieu', function () {
    return view('client.about');
})->name('gioithieu');

//Đăng nhập cho khách hàng
Route::get('dang-nhap', 'AuthController@getClientLogin')->name('dangnhapkhachhang');

Route::get('/loai-san-pham/{idCategory}', 'TrangchuController@getCategory')->name('loaisanpham');
Route::get('/san-pham/{idProduct}', 'TrangchuController@getProduct')->name('sanpham');
Route::get('/san-pham', 'TrangchuController@getAllProduct')->name('tatcasanpham');

