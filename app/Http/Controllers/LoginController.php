<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login() {
        return view('login.login-page');
    }
    function regis() {
        return view('login.regis-page');
    }

    function createRegis(Request $request ) {
        
        // dd($request);
        $regis=new User;
        $regis->name=$request->name;
        $regis->email=$request->email;
        $regis->password=Hash::make($request->password);

        $regis->save();

        return redirect('login/login');
        // return response()->json('sukses')
        
    }

    function home() {
        return view('login.homepage');
    }

    function actionLogin(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('login.home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}