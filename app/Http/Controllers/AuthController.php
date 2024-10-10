<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('username', 'password');

        // Cek kredensial
        if (Auth::attempt($credentials)) {
            // Redirect ke dashboard
            return redirect()->intended('menu/menu');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
