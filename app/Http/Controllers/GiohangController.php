<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
use Cart;
class GiohangController extends Controller
{
    public function addCart(Request $request, $idSP){
        $product = DB::table('sanpham')->where('sp_id','=',$idSP)->first();
        if($request->qty)
        {
            $qty = $request->qty;
        }else{
            $qty = 1;
        }
        if($product->sp_giakhuyenmai > 0){
            $price = $product->sp_giakhuyenmai;
        }
        else{
            $price = $product->sp_giaban;
        }
        $cart = Cart::add([
            'id' => $idSP,
            'name' => $product->sp_ten,
            'price' => $price,
            'quantity' => $qty,
            'associatedModel' => $product
        ]);
        // dd($cart);
        if ($cart) {
            # code...
            return redirect()->back();
            // return response()->json('Đã thêm sản phẩm vào giỏ hàng', 200);
        }
        else{
            return redirect()->back();
        }
    }


    //get all product from cart
    public function getCart(){
        $cart = Cart::getContent();
        // $cart = Cart::remove($rowId);
        // Cart::remove($rowId);
        dd($cart);
        // if($cart)
        // {
        //     dd($cart);
        // }
    }

    //Remove one product from cart
    public function remove($id) {
        $cart = Cart::remove($id);
        return redirect()->back();
    }

    //clear all product from cart
    public function clearCart() {
        Cart::clear();
        return redirect()->back();
    }

    public function checkOut() {
        if(Session::has('kh')){
            $username = Session::get('kh');
            $cart = Cart::getContent();
            $khachhang = DB::table('khachhang')->where('username','=',$username)->first();
            return view('client.checkout',compact(['khachhang','cart']));
        }else {
            return redirect()->route('dangnhapkhachhang');
        }
    }

    public function checkOut2() {
        if(Session::has('kh')){
            $username = Session::get('kh');
            $cart = Cart::getContent();
            $khachhang = DB::table('khachhang')->where('username','=',$username)->first();
            return view('client.checkout-2',compact(['khachhang','cart']));
        }else {
            return redirect()->route('dangnhapkhachhang');
        }
    }

    public function getMethodCheckout (Request $request){
        $method = $request->get('thanhtoan');
        switch ($method) {
            case 'vnpay':
                # code...
                return redirect()->route('vnpay');
                break;
            case 'shipcod':
                return redirect()->route('');

            default:
                # code...
                break;
        }
    }
}
