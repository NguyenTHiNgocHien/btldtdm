<?php

namespace App\Http\Controllers;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;

class ThongkeController extends Controller
{
    public function index(){
        // $data = Analytics::fetchMostVisitedPages(Period::days(7));
        // //dd($data);
        // return view('admin.index');
    }
}
