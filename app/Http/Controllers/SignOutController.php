<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function index(){

        auth()->logout();
        
        return redirect()->route('home');
    }
}
