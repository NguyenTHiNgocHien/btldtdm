<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DonhangController extends Controller
{
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
}
