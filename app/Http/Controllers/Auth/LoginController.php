<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            // Jika berhasil, redirect ke beranda dengan pesan sukses
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembali dengan pesan error
        return back()->withErrors([
            'error' => 'Email atau password salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Menghapus sesi pengguna

        // Menghapus data sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau beranda
        return redirect()->route('dashboard')->with('success', 'Anda telah berhasil logout.');
    }
}
