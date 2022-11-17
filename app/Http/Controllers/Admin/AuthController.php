<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->is_admin == 1){
                return redirect()->route('dashboard')
                ->with('success','You have Successfully loggedin');
            }
            return redirect("login")->with('faild','Oppes! Not access.');
        }

        return redirect("login")->with('faild','Oppes! You have entered invalid credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
