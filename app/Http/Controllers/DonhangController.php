<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class DonhangController extends Controller
{
    //hien nguoi dung
    public function getOrders()
    {
        $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
        $orders = DB::table('chitietdonhang')
                ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
                ->where('kh_id','=',$user->kh_id)
                ->distinct('dh_ma')
                ->get();
        // dd($orders);
        return view('client.orders',compact('orders'));
    }


    public function getOrdersAdmin()
    {
        $donhang = DB::table('donhang')->get();
        return view('admin.donhang.index',compact('donhang'));
        // return dd($loai);
    }

    public function show($id,$user)
    {   
        $donhang = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->first();
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        //$user = DB::table('khachhang')->where('kh_hoten','=',$user)->first();
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->get();
        //dd($donhang->sp_id);
        // dd($donhang2);

        return view('admin.donhang.detail', compact(['donhang','donhang1','donhang2']));

    }

    public function trangthai($id,  Request $request)
    {
        $donhang = DB::table('donhang')->where('dh_id',$id)->first();
        $trangthai = $request->trangthai;
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        DB::table('donhang')->where('dh_id',$id)->update(['dh_trangthai' => $trangthai]);
        $success = Session::put('alert-info', 'Cập nhật trạng thái thành công');
        return redirect()->back();
    }

    public function update($id)
    {
        $now = Carbon::now();
        $data = DB::table('donhang')->where('dh_madon',$id)
                    ->update(
                        [
                            'dh_trangthai' => 3,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachdonhang');
    } 

    public function vanchuyen($id,  Request $request)
    {
        $donhang = DB::table('donhang')->where('dh_id',$id)->first();
        $vanchuyen = $request->vanchuyen;
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        DB::table('donhang')->where('dh_id',$id)->update(['dh_quatrinhvanchuyen' => $vanchuyen]);
        $success = Session::put('alert-info', 'Cập nhật thành công');
        return redirect()->back();
    }

    // public function capnhatvanchuyen($id)
    // {
    //     $now = Carbon::now();
    //     $data = DB::table('donhang')->where('dh_madon',$id)
    //                 ->update(
    //                     [
    //                         'dh_quatrinhvanchuyen' => 3,
    //                         'updated_at' => $now,
    //                     ]
    //                 );

    //     //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
    //     $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
    //     return redirect()->route('danhsachdonhang');
    // } 

}
