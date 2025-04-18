<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Email wajib diisi.',
            'password.required'=>'Password wajib diisi.',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin))
        {
            if(Auth::user()->role == 'admin') {
                return redirect('admin');
            } elseif (Auth::user()->role == 'pendaftaran') {
                return redirect('admin/pendaftaran');
            } elseif (Auth::user()->role == 'dokter') {
                return redirect('admin/dokter');
            } elseif (Auth::user()->role == 'kasir') {
                return redirect('admin/kasir');
            }
        } else {
            return redirect('/login')->withErrors('Username dan password yang dimasukkan tidak sesuai.')->withInput();
        }
    }
}
