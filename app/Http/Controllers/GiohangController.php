<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
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
            return redirect()->route('trangchu');
            // return response()->json('Đã thêm sản phẩm vào giỏ hàng', 200);
        }
        else{
            return response()->json('Something errors', 500);
        }
    }

    public function getCart(){
        $cart = Cart::getContent();
        // $cart = Cart::remove(456);
        dd($cart);
    }
}
