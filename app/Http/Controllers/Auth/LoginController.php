<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->only('email', 'password');

        // Melakukan login
        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke halaman utama
            return redirect()->route('home');
        }

        // Jika login gagal, beri pesan error
        return Redirect::back()->withErrors(['loginError' => 'Invalid credentials!']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

