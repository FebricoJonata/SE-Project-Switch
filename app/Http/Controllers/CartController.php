<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(){
        $user = Auth::user();
        $cart = Cart::all()->where('userid', $user->id);
        $barangIds = $cart->pluck('barangid')->toArray();
        $products = Barang::whereIn('id', $barangIds)->get();
        $data = collect($cart)->zip($products);
        return view('cart', compact('data'));
    }

    public function addToCart($id){
        $user = Auth::user();
        $exist = Cart::where('userid', $user->id)->where('barangid', $id)->first();
        if($exist){
            Cart::where('userid', $user->id)->where('barangid', $id)->update(['quantity'=> $exist->quantity + 1]);
            // $exist->save();
        }
        else{
            $cart = new Cart();
            $cart->userid = $user->id;
            $cart->barangid = $id;
            $cart->quantity = 1;
            $cart->save();
        }
        return redirect('/detail/'. $id);
    }

    public function deletecart($id){
        $user = Auth::user();
        $exist = Cart::where('userid', $user->id)->where('barangid', $id)->delete();
        return redirect('/cart');
    }
}
