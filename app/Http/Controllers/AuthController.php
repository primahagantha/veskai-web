<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil, alihkan pengguna ke halaman yang diinginkan
        return redirect()->intended('/dashboard');
    }

    // Jika autentikasi gagal, alihkan kembali dengan pesan kesalahan
    return back()->withErrors(['email' => 'Login gagal.']);
}
}
