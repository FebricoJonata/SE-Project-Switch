<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function storeData(Request $request){
        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'telphone'=> 'required',
            'password' => 'required'
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        User::create($validasi);
        dd($validasi);
    }
}
