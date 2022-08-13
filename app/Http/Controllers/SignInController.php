<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index(){
        return view('user.signin');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Auth::attempt($request->only('email', 'password'), $request->remember);

        if (!Auth::attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->route('login')->with('message', 'Wrong password or email, Try Again');
        }

        // \dd('this works');

        return redirect()->intended('recipe');
    }
}
