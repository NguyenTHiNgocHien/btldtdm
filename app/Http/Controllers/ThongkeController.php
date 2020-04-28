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
        $tongluotxem = Analytics::fetchVisitorsAndPageViews(Period::days(29));
        $data ['date'] = $tongluotxem->pluck("date");
        $data ['visitors'] = $tongluotxem->pluck("visitors");
        $data ['pageViews'] = $tongluotxem->pluck("pageViews");
       
        // return view('admin.index');
        // $sanpham = DB::table('congdung')->paginate(5);
        // return view('admin.congdung.index',compact('congdung')); 
        //retrieve visitors and pageview data for the current day and the last seven days

        $data ['fetchTopReferrers'] = Analytics::fetchTopReferrers(Period::days(29));
        
        $countDH = DB::table('donhang')->whereMonth('created_at',date('m'))->count('dh_id');
        $countKH = DB::table('khachhang')->whereMonth('created_at',date('m'))->count('kh_id');
        $countSP = DB::table('sanpham')->count();
        $countDH = DB::table('donhang')->count();
        //$countLSP = DB::table('loai')->count();
        return view('admin.index',compact([
            'countSP',
            //'countLSP',
            'countDH',
            'countKH',
            'countDH',
            'data'
        ]));
    }
}
