<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('user.register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required', 
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'confirmed'
        ]);

        User::create([
            'name' => $request->name, 
            'username' => $request->username,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
        ]);

        
        //After registration, user shouldn't have to type in their username and password again, so the line below makes a little trick and sign them in using the mail and password they enter

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('recipe');
    }
}
