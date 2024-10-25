<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('admin.admin');
    }

    // Proses login menggunakan username
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
       // Debugging sederhana
if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
    $request->session()->regenerate();
    return redirect()->route('dashboard');
} else {
    return back()->withErrors([
        'username' => 'masukin sandi yang benar',
    ])->withInput();
}
    }
    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin');
    }
}

