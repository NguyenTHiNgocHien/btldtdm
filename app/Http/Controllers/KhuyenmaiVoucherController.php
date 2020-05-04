<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class KhuyenmaiVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.khuyenmai.voucher');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $khuyenmai = DB::table('khuyenmai')->insertGetId(
            [
                'km_ten' => $request->km_ten,
                'km_noidung' => $request->km_noidung,
                'km_giatri' => null,
                'km_batdau' => $request->km_batdau,
                'km_ketthuc' => $request->km_ketthuc,
                'km_trangthai' => 1
            ]
        );

        $voucher = DB::table('vouchers')->inserGetId(
            [
                'vc_code' => $request->vc_code
            ]
        );

        $ctl = DB::table('chitietlo')->insert([
            'lo_id' => $lo,
            'sp_id' => $request->id_sp,
            'ctl_dongia' => $request->dongia,
            'ctl_soluong' => $request->soluong,
            'created_at' => $now->toDateString(),
            'updated_at' => $now->toDateString()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
