<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; // Pastikan Auth di-import

class RegisterController extends Controller
{
    // Menampilkan halaman registrasi
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Menangani proses pendaftaran
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|unique:users,name|max:255',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|confirmed|min:8',
        ]);

        // Jika validasi gagal, kembalikan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data pengguna baru ke database
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        // Login pengguna setelah pendaftaran
        Auth::login($user); // Pastikan menggunakan Auth::login()

        // Redirect ke halaman utama setelah login
        return redirect()->route('home');
    }

    public function checkEmail(Request $request)
    {
        $emailExists = User::where('email', $request->email)->exists();

        if ($emailExists) {
            return response()->json(['status' => 'error', 'message' => 'Email sudah terdaftar.'], 400);
        }

        return response()->json(['status' => 'success', 'message' => 'Email tersedia.']);
    }

}

