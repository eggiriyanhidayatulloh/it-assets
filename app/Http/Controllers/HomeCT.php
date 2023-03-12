<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCT extends Controller
{
    //

    public function login()
    {
        if (auth()->user()) {
            return redirect('/admin/dashboard');
        } else {
            return view("auth.login");
        }
    }
}
