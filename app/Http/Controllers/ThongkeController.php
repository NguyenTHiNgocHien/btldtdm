<?php

namespace App\Http\Controllers;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ThongkeController extends Controller
{
    public function index(){
        $data = [];
        $tongluotxem = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $data ['date'] = $tongluotxem->pluck("date");
        $data ['visitors'] = $tongluotxem->pluck("visitors");
        $data ['pageViews'] = $tongluotxem->pluck("pageViews");
       
        // return view('admin.index');
        // $sanpham = DB::table('congdung')->paginate(5);
        // return view('admin.congdung.index',compact('congdung')); 
        //retrieve visitors and pageview data for the current day and the last seven days

        $data ['fetchTopReferrers'] = Analytics::fetchTopReferrers(Period::days(7));
        
        //$countDH = DB::table('donhang')->where('dh_trangthai'=='1')->count('dh_id');
        $countKH = DB::table('khachhang')->count();
        $countSP = DB::table('sanpham')->count();
        $countDHCD = DB::table('donhang')->where('dh_trangthai','=',3)->count();
        $countTT = DB::table('donhang')->whereMonth('dh_thoigiandathang', Carbon::now())->sum('dh_tongtien');

        //$countLSP = DB::table('loai')->count();
        return view('admin.index',compact([
            'countSP',
            //'countLSP',
            //'countDH',
            'countKH',
            'countDHCD',
            'countTT',
            'data'
        ]));
    }
}
