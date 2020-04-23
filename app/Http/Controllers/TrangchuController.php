<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TrangchuController extends Controller
{

    public function index()
    {
        $sanphammoi = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('created_at','desc')->paginate(5);
        $flashsale = DB::table('sanpham')->where('sp_trangthai','=',1)->where('sp_giakhuyenmai','>',0)->get();



        //Lấy banner ra ngoài
        $banner = DB::table('banner')->get();
        return view('client.index',compact(['sanphammoi','flashsale','banner']));
    }

    public function getCategory ($idCategory)
    {

        //Lấy ra loại sản phẩm
        $category = DB::table('loai')
                    ->where('l_id', $idCategory)
                    ->first();
        //Đếm số sản phẩm trong loại đó
        $countProduct = DB::table('sanpham')
                        ->where('l_id',$idCategory)->where('sp_trangthai',1)->where('sp_giaban','>',0)
                        ->count();

        //Lấy thông tin sản phẩm trong loại
        $product = DB::table('sanpham')
                    ->where('l_id',$idCategory)->where('sp_trangthai',1)->where('sp_giaban','>',0)
                    ->paginate(5);
        $sanphamKM = DB::table('sanpham')->where('l_id',$idCategory)->where('sp_giakhuyenmai','>','0')->paginate(3);

        $productPopular = DB::table('sanpham')
                    ->where('l_id',$idCategory)->where('sp_danhgia','>=',4)
                    ->where('sp_trangthai',1)
                    ->paginate(3);
        //Lấy hình ảnh của sản phẩm đã được phân loại
        $productImage = DB::table('sanpham')->join('hinhanh','hinhanh.sp_id','=','sanpham.sp_id')->where('l_id',$idCategory)->first();
        
        // return dd($productPopular);
        //Truyền tất cả ra view cho nó ok
        return view('client.category', compact(['category', 'countProduct', 'product', 'productImage','productPopular','sanphamKM']));
    }

    public function getProduct ($idProduct)
    {
        $product = DB::table('sanpham')->where('sp_id', $idProduct)->first();
        $category = DB::table('loai')->where('l_id','=',$product->l_id)->first();
        $productImage = DB::table('hinhanh')->where('sp_id', $idProduct)->get();

        $productCate = DB::table('sanpham')->join('loai','loai.l_id', '=' , 'sanpham.l_id')->get();

        // dd($productCate);
        return view('client.product-detail',compact(['product', 'productImage','productCate','category']));
    }

    public function getAllProduct (){
        //Lẫy ngẫu nhiên sản phẩm
        $allProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(5);
        $productPopular = DB::table('sanpham')->where('sp_danhgia','>=', 3)->paginate(2);
        $allCategory = DB::table('loai')->get();
        $newProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(2);
        $countProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->count();
        return view('client.product',compact(['allProduct','allCategory','countProduct','newProduct']));
    }

    public function getAllProduct2 (){
        //Lẫy ngẫu nhiên sản phẩm
        $allProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(5);
        $allCategory = DB::table('loai')->get();
        $countProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->count();
        $newProduct = DB::table('sanpham')->where('sp_trangthai','=',1)->orderBy('sp_id','desc')->paginate(2);
        return view('client.product-2',compact(['allProduct','allCategory','countProduct','newProduct']));
    }


    public function searchProduct (Request $request){
        $search = $request->get('search');
        $count = DB::table('sanpham')->where('sp_ten','LIKE','%'.$search.'%')->where('sp_trangthai','=',1)->orderBy('created_at','desc')->count();
        $data = DB::table('sanpham')->where('sp_ten','LIKE','%'.$search.'%')->where('sp_trangthai','=',1)->orderBy('created_at','desc')->get();
        return view('client.product-search',compact(['count','data','search']));
    }

    public function getBanner($idBanner) {
        $banner = DB::table('banner')->where('bn_id','=',$idBanner)->first();
        return view('client.banner',compact('banner'));
    }
}
