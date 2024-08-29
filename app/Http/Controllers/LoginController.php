<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        // Validasi input untuk username dan password
        $request->validate([
            'username'  => 'required',
            'password'  => 'required',
        ]);

        // Data username dan password yang diinputkan oleh pengguna
        $data = [
            'username'  => $request->username,
            'password'  => $request->password,
        ];

        // Username dan password yang ditetapkan dalam program
        $validUsername = 'bawaslusurabaya';
        $validPassword = 'formbawaslu';

        // Memeriksa apakah username dan password yang diinputkan sesuai
        if ($data['username'] === $validUsername && $data['password'] === $validPassword) {
            // Jika sesuai, login dan arahkan ke dashboard admin
            session(['authenticated' => true]);
            return redirect()->route('index')->with('success', 'Login berhasil');
        } else {
            // Jika tidak sesuai, arahkan kembali ke halaman login dengan pesan error
            return redirect()->route('login')->with('failed', 'Username atau Password Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }
}
