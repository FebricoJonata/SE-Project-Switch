<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function verify(Request $request){

        $userIdentity = $request->validate([
            'nama' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($userIdentity)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    
}
