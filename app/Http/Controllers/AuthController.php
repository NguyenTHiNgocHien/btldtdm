<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Nhanvien;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


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
    public function getClientLogin(){
        $capcha = rand(1000,9999);
        return view('client.login', compact('capcha'));
    }

    public function ClientRegister (Request $request) {
        $username = $request->username;
        $password = $request->password;
        $hoten = $request->hoten;
        $gioitinh = $request->gioitinh;
        $email = $request->email;
        $diachi = $request->diachi;
        $sdt = $request->sdt;
        
    }

    public function ClientLogin (Request $request){

    }
}
