<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
    		return redirect('/admin');
    	}
    	return redirect('/');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
