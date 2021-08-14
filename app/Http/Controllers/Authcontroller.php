<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Klien;

class Authcontroller extends Controller
{
    function index_admin()
    {
        return view('login');
    }

    function post_admin(Request $request)
    {
        Auth::guard('web')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if (Auth::guard('web')->check()) {
            return redirect()->route('pendaftaran.index');
        } else {
            return back()->with('error', true);
        }
    }

    function index_klien()
    {
        return view('front.auth.login');
    }

    function register_klien()
    {
        return view('front.auth.register');
    }

    function login_klien_post(Request $request)
    {
        Auth::guard('klien')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if (Auth::guard('klien')->check()) {
            return redirect()->route('index');
        } else {
            return back()->with('error', true);
        }
    }

    function register_klien_post(Request $request)
    {
        $data = new Klien();
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect()->route('login.index');
    }
}
