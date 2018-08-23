<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class login_user extends Controller
{
    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
//        dd($password);
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('/client/home');
        } else {
            return redirect('/login');
        }
    }
}
//sha1(Hash::make($request['password']))