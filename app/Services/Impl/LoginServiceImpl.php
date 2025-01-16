<?php
namespace App\Services\Impl;

use App\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginServiceImpl implements LoginService
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            $request->session()->put('user', $request['email']);
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Email atau password anda salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
