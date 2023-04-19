<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function view(){
        return view('home');
    }

    public function storeData(Request $request){
        // dd('test');
        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required|email:dns|unique:users',
            'telphone'=> 'required',
            'password' => 'required|min:5|alpha_num'
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        User::create($validasi);
        dd($validasi);
    }


}
