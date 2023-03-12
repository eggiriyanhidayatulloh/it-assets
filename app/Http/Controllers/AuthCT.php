<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCT extends Controller
{

    // validasi login
    public function login(Request $request)
    {
        // cek username sama password terisi atau belum
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        // cek login
        if (auth()->attempt(array('username' => $request->username, 'password' => $request->password))) {
            // redirect admin
            return redirect("admin/dashboard");
        } else {

            // username / password salah
            return redirect("/")->with('status', 'Username / Password Salah!');;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
