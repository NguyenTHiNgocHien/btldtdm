<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Nhanvien;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Khachhang;


class AuthController extends Controller
{
    public function getLogin() {
        if(Auth::guard('nhanvien')->check())
        {
            return redirect()->route('admin');
        }
        else
        {
            return view('admin.login');
        }
    }

    public function getLoginAdmin () {
        return view('');
    }

    public function logoutAdmin ()
    {
        Auth::guard('nhanvien')->logout();
        Session::put('username', null);
        return redirect()->route('getDangnhap');
    }

    public function authLogin(Request $request){
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        //ADMIN cũng là nhân viên

        if (Auth::guard('nhanvien')->attempt($arr))
        {
            $taikhoan = Nhanvien::where('username', '=' , $request->username)->orWhere('password', '=', $request->password)->first();
            
                // $success = Session::put('username', $taikhoan->username);
                $quyen_ten=\Auth::guard('nhanvien')->user()->load('quyen')->quyen->q_ten;
                if($quyen_ten=="Admin"){
                    //truyền id qua truyền bằng session v đc hk
                    //truyen di dau, truyền qua cho xuyên ssuốt quá trình sd, tại t cần gán nhân viên nào làm gì
                    //xai auth
                    $nv_id = \Auth::guard('nhanvien')->user()->nv_id;
                    $dataNV = Nhanvien::where('nv_id','=', $nv_id)->first();
                    Session::put('username', $taikhoan->username);
                    // View::share('dataNV',$dataNV);
                    return redirect()->route('admin');
                    // return view()->share('dataNV', $dataNV);
                }
                else{
                    return (123);
                }
        } else {
            dd('đăng nhập không thành công');
        }
    }
    
    public function getClientRegister(){
        $capcha = rand(1000,9999);
        return view('client.register', compact('capcha'));
    }

    public function getClientLogin(){
        return view('client.login');
    }

    public function ClientRegister (Request $request) {
        $username = $request->username;
        $password = bcrypt($request->password);
        $hoten = $request->hoten;
        $gioitinh = $request->gioitinh;
        $email = $request->email;
        $diachi = $request->diachi;
        $sdt = $request->sdt;
        $capcha = $request->capcha;
        $capchacode = $request->capchacode;

        $validate = Validator::make(
            $request->all(),
            [
                'username' => 'required | min:5',
                'password' => 'required',
                'hoten' => 'required',
                'gioitinh' => 'required',
                'email' => 'required',
                'diachi' => 'required',
                'sdt' => 'required',
                'capcha' => 'required'
            ],
            [
                'required' => 'Không được để trống'
            ]
        );

        if ($validate->fails()) {
            return redirect()->route('dangkykhachhang')->withErrors($validate);
        }


        $validation_custom_username = DB::table('khachhang')->where('username','=',$username)->first();
        $validation_custom_email = DB::table('khachhang')->where('kh_email','=',$email)->first();
        
        if ($validation_custom_username)
        {
            $success = Session::put('alert-error', 'Tài khoản đã có người sử dụng');
            return redirect()->route('dangkykhachhang');
        }
        
        else if ($validation_custom_username)
        {
            $success = Session::put('alert-error', 'Tài khoản đã có người sử dụng');
            return redirect()->route('dangkykhachhang');
        }
        
        if($capcha != $capchacode || $capcha == ''){
            $success = Session::put('alert-error', 'Mã bảo vệ không chính xác');
            return redirect()->route('dangkykhachhang');
        }
        else{
            $data = DB::table('khachhang')->insert([
                'username' => $username,
                'password' => $password,
                'kh_hoten' => $hoten,
                'kh_gioitinh' => $gioitinh,
                'kh_email' => $email,
                'kh_diachi' => $diachi,
                'kh_sdt' => $sdt,
                'lkh_id' => '1'
            ]);

            $success = Session::put('alert-info', 'Đăng ký thành công');
            return redirect()->route('dangkykhachhang');
        }    
    }
    // public function getLoginClient () {
    //     return view('');
    // }
    public function getLoginClient() {
        if(Auth::guard('khachhang')->check())
        {
            return redirect()->route('trangchu');
        }
        else
        {
            return view('admin.client.login');
        }
    }
    public function ClientLogin (Request $request){
        $arr1 = [
            'username' => $request->username,
            'password' => $request->password,
        ];
       
            $taikhoan = Khachhang::where('username', '=' , $request->username)->orWhere('password', '=', $request->password)->first();
            
                 //$success = Session::put('username', $taikhoan->username);
                
                
                    //truyền id qua truyền bằng session v đc hk
                    //truyen di dau, truyền qua cho xuyên ssuốt quá trình sd, tại t cần gán nhân viên nào làm gì
                    //xai auth
                
                     $abc = Session::put('kh', $taikhoan->username);

                     // dd($taikhoan->username);
                     return redirect()->route('trangchu');

                    // return view()->share('dataNV', $dataNV);
                    //return view('client.template.header',compact('$taikhoan'));
                
        
    }
    public function logoutClient ()
    {
        Auth::guard('khachhang')->logout();
        Session::put('kh', null);
        return redirect()->route('trangchu');
    }
}
