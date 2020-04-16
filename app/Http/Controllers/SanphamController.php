<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->paginate(5);
        // $sanphamcon = DB::table('sanpham')->join('chitietlo','chitietlo.sp_id','=','sanpham.sp_id')->distinct()->get();
        // dd($sanphamcon);
        $loai = DB::table('loai')->get();
        $congdung = DB::table('congdung')->get();
        return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
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
        $now = Carbon::now();
        $sanpham = DB::table('sanpham')
                ->insert(
                    [
                        'sp_ten' => $request->tenSP,
                        'sp_giagoc' => $request->giaGoc,
                        'sp_giaban' => $request->giaBan,
                        'sp_thongtin' => $request->thongTin,
                        'l_id' => $request->loai,
                        'cd_id' => $request->congDung,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($sanpham)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachsanpham');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachsanpham');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sanpham = DB::table('sanpham')->where('sp_id',$id)
                    ->join('loai','loai.l_id','=','sanpham.l_id')
                    ->join('congdung','congdung.cd_id','=','sanpham.cd_id')
                    ->join('congdungphu','congdungphu.cdp_id','=','sanpham.cdp_id')
                    ->first();
        $lo = DB::table('chitietlo')->where('sp_id',$id)->get()->sum('ctl_soluong');
        $chitietlo = DB::table('lo')->join('chitietlo','chitietlo.lo_id','=','lo.lo_id')
                    ->where('sp_id',$id)
                    ->get()->sortBy('ctl_dongia')->first();
        $hsd = DB::table('chitietlo')->where('sp_id',$id)->first();
        // if($chitietlo && $lo)
        // {
            $count = Collection::make(DB::table('chitietlo')->where('sp_id',$id)->get('ctl_soluong'))->sum();
            $anhsanpham = DB::table('hinhanh')->where('sp_id',$id)->get();
            return view('admin.sanpham.detail', compact(['sanpham','anhsanpham','lo','chitietlo','hsd']));
        // }
        // dd($chitietlo);
        // return dd('Binhhh');
        
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
        // $sanpham = DB::table('')
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

    public function getAvata($id, $tenHA)
    {
        DB::table('sanpham')->where('sp_id',$id)->update(['sp_anhdaidien'=> $tenHA]);
        return redirect()->route('chitietsanpham', ['id' => $id]);
    }

    public function khuyenmai($id, Request $request)
    {
        $sanpham = DB::table('sanpham')->where('sp_id',$id)->first();
        $giaban = $sanpham->sp_giaban;
        $giakm =  $giaban - ($giaban * $request->giatri / 100);
        DB::table('sanpham')->where('sp_id',$id)->update(['sp_giakhuyenmai' => $giakm]);
        $success = Session::put('alert-info', 'Cập nhật giá thành công');
        return redirect()->route('chitietsanpham', ['id' => $id]);
    }

    public function resetGia ($id)
    {
        DB::table('sanpham')->where('sp_id',$id)->update(['sp_giakhuyenmai' => NULL]);
        return redirect()->route('chitietsanpham', ['id' => $id]);
    }

    public function addShipment ($id) {
        return view('admin.sanpham.addshipment');
    }

    public function CapNhatGiaBan ($id, Request $request) {
        $giacu = DB::table('sanpham')->where('sp_id','=',$id)->first();
        if($request->giaban <= $giacu->sp_giagoc){
            $success = Session::put('alert-del', 'Không được thấp hơn giá gốc');
            return redirect()->route('chitietsanpham', ['id' => $id]);
        }
        else
        {
            DB::table('sanpham')->where('sp_id','=',$id)->update([
                'sp_giaban' => $request->giaban
            ]);
            $success = Session::put('alert-info', 'Cập nhật giá thành công');
            return redirect()->route('chitietsanpham', ['id' => $id]);
        }
    }

    public function nhapHang(Request $request)
    {
        
        $now = Carbon::now();
        // $timsanpham = DB::table('chitietlo')->where('sp_id','=',$request->id_sp)->where('ctl_soluong','>',0)->first();
        // if($timsanpham){ 
        //     return dd('Sản phẩm còn hàng');
        // }
        $ngaysanxuat = Carbon::parse($request->ngaysanxuat)->format('d/m/Y');
        $hansudung = Carbon::parse($request->hansudung)->format('d/m/Y');
            $lo = DB::table('lo')
                ->insertGetId(
                    [
                        'lo_ten' =>$request->tenLo,
                        'created_at' => $now,
                        'updated_at' => $now,
                        'lo_hansudung' => $hansudung,
                        'lo_ngaysanxuat' => $ngaysanxuat
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
        if($lo)
        {
            $soluongcu = DB::table('sanpham')->where('sp_id','=',$request->id_sp)->first();
            $sp_trangthai = DB::table('sanpham')->where('sp_id','=',$request->id_sp)->update([
                'sp_trangthai' => '1',
                'sp_giagoc' => $request->dongia,
                'sp_soluong' => $soluongcu->sp_soluong+$request->soluong,
            ]);
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('chitietsanpham', ['id' => $request->id_sp]);
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachlo');
        }
    }
}
