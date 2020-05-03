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




/* Phần này là các route của trang admin */
// Xử lý đăng nhập cho trang admin
Route::get('dang-nhap-admin', 'AuthController@getLogin')->name('getDangnhap');
Route::post('dang-nhap-admin','AuthController@authLogin')->name('dangnhap');


// ->middleware('checkUser')
Route::group(['prefix' => 'admin', 'middleware' => 'checkUser'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::get('/dang-xuat','AuthController@logoutAdmin')->name('dangxuat');
     Route::get('/', 'ThongkeController@index')->name('admin');
    //Các route này của Loại sản phẩm
    Route::get('loai', 'LoaiController@index')->name('danhsachloai');

    Route::post('loai','LoaiController@store')->name('themloai');

    Route::get('loai/{id}/edit','LoaiController@edit')->name('sualoai');

    Route::post('loai/{id}/edit', 'LoaiController@update')->name('capnhatloai');

    Route::get('loai/{id}/delete','LoaiController@destroy')->name('xoaloai');

    Route::get('loai/search', 'LoaiController@search')->name('search-category');
    //thương hiệu nà
    Route::get('thuonghieu', 'ThuonghieuController@index')->name('danhsachthuonghieu');

    Route::post('thuonghieu','ThuonghieuController@store')->name('themthuonghieu');

    Route::get('thuonghieu/{id}/edit','ThuonghieuController@edit')->name('suathuonghieu');

    Route::post('thuonghieu/{id}/edit', 'ThuonghieuController@update')->name('capnhatthuonghieu');

    Route::get('thuonghieu/{id}/delete','ThuonghieuController@destroy')->name('xoathuonghieu');

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

    //Sản phẩm truyền cái biến sort dô
    Route::get('san-pham/{sort}', 'SanphamController@index')->name('danhsachsanpham');

    //Hiển thị giao diện thêm sản phẩm
    Route::get('them-san-pham', 'SanphamController@create')->name('giao-dien-them');

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
    Route::get('sanpham/{id}/edit','SanphamController@edit')->name('suathongtinsanpham');
    Route::get('sanpham/{id}/cap-nhat-gia-ban','SanphamController@CapNhatGiaBan')->name('capnhatgiaban');
    Route::get('sanpham/{idsp}', 'SanphamController@editProduct')->name('showproduct');




    //Hình ảnh cho sản phẩm
    Route::get('sanpham/{id}/hinhanh','HinhanhController@create')->name('themhinhanh');
    Route::post('sanpham/hinhanh', 'HinhanhController@store')->name('themhinhanh2222');
    Route::get('sanpham/{idHA}/{idSP}/ha-delete','HinhanhController@destroy')->name('xoahinhanh');
    Route::get('sanpham/{id}/{tenHA}','SanphamController@getAvata')->name('datanhdaidien');
    //Công dụng nà
    Route::get('congdung', 'CongdungController@index')->name('danhsachcongdung');

    Route::post('congdung','CongdungController@store')->name('themcongdung');

    Route::get('congdung/{id}/edit','CongdungController@edit')->name('suacongdung');

    Route::post('congdung/{id}/edit', 'CongdungController@update')->name('capnhatcongdung');

    Route::get('congdung/{id}/delete','CongdungController@destroy')->name('xoacongdung');
    //Công dụng phụ nà
    Route::get('congdungphu', 'CongdungphuController@index')->name('danhsachcongdungphu');  

    Route::post('congdungphu','CongdungphuController@store')->name('themcongdungphu');

    Route::get('congdungphu/{id}/edit','CongdungphuController@edit')->name('suacongdungphu');

    Route::post('congdungphu/{id}/edit', 'CongdungphuController@update')->name('capnhatcongdungphu');

    Route::get('congdungphu/{id}/delete','CongdungphuController@destroy')->name('xoacongdungphu');
    ///Hình thức thanh toán nà
    Route::get('hinhthucthanhtoan', 'HinhthucthanhtoanController@index')->name('danhsachhinhthucthanhtoan');  

    Route::post('hinhthucthanhtoan','HinhthucthanhtoanController@store')->name('themhinhthucthanhtoan');

    Route::get('hinhthucthanhtoan/{id}/edit','HinhthucthanhtoanController@edit')->name('suahinhthucthanhtoan');

    //Khuyến mãi
    Route::get('khuyenmai/voucher', 'KhuyenmaiVoucherController@index')->name('voucher');
    Route::post('hinhthucthanhtoan/{id}/edit', 'HinhthucthanhtoanController@update')->name('capnhathinhthucthanhtoan');

    Route::get('hinhthucthanhtoan/{id}/delete','HinhthucthanhtoanController@destroy')->name('xoahinhthucthanhtoan');
    ///Hình thức vận chuyển nà
    Route::get('hinhthucvanchuyen', 'HinhthucvanchuyenController@index')->name('danhsachhinhthucvanchuyen');  

    Route::post('hinhthucvanchuyen','HinhthucvanchuyenController@store')->name('themhinhthucvanchuyen');

    Route::get('hinhthucvanchuyen/{id}/edit','HinhthucvanchuyenController@edit')->name('suahinhthucvanchuyen');

    Route::post('hinhthucvanchuyen/{id}/edit', 'HinhthucvanchuyenController@update')->name('capnhathinhthucvanchuyen');

    Route::get('hinhthucvanchuyen/{id}/delete','HinhthucvanchuyenController@destroy')->name('xoahinhthucvanchuyen');


    //quản lý banner
    Route::get('banner','BannerController@index')->name('banner');
    Route::get('banner/them-banner','BannerController@create')->name('them-banner');
    Route::post('banner/them-banners','BannerController@store')->name('them-banners');
    Route::get('banner/chi-tiet/{id}','BannerController@show')->name('chi-tiet-banner');
    Route::get('banner/cap-nhat-trang-thai/{id}/{trangthai}','BannerController@CapNhatTrangThai')->name('capnhattrangthai');
    //Thống kê
    Route::get('thong-ke','ThongkeController@index')->name('thongke');
});


//Xử lý trang chủ cho người dùng
Route::get('/', 'TrangchuController@index')->name('trangchu');
Route::get('/gioi-thieu', function () {
    return view('client.about');
})->name('gioithieu');

//Đăng nhập và đăng ký cho khách hàng
Route::get('dang-ky', 'AuthController@getClientRegister')->name('dangkykhachhang');
Route::post('dang-ky-1', 'AuthController@ClientRegister')->name('dang-ky');

Route::get('dang-nhap', 'AuthController@getClientLogin')->name('dangnhapkhachhang');
Route::post('dang-nhap-1', 'AuthController@ClientLogin')->name('dang-nhap');

Route::get('/dang-xuat-kh','AuthController@logoutClient')->name('dangxuatkh');


Route::get('/loai-san-pham/{idCategory}', 'TrangchuController@getCategory')->name('loaisanpham');
Route::get('/san-pham/{idProduct}', 'TrangchuController@getProduct')->name('sanpham');
Route::get('/san-pham', 'TrangchuController@getAllProduct')->name('tatcasanpham');
Route::get('/san-pham-2', 'TrangchuController@getAllProduct2')->name('tatcasanpham-2');
//Banner
Route::get('banner/{idBanner}','TrangchuController@getBanner')->name('getBanner');


// Tìm kiếm nè:
Route::get('tim-kiem','TrangchuController@searchProduct')->name('search');

//Liên hệ khách hàng với shop
Route::get('/lien-he', function () {
    return view('client.contact');
})->name('lienhe');
//Chi Tiết Khách Hàng
Route::get('/ChiTietKhachHang/{username}','AuthController@getInfoClient')->name('chitietkhachhang');

Route::get('/ChiTietKhachHang/{username}/edit','AuthController@edit')->name('suathongtintaikhoan');

Route::post('/ChiTietKhachHang/{id}/update', 'AuthController@update')->name('capnhatthongtintaikhoan');
