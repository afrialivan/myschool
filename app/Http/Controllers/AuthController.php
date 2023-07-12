<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }
    public function login(Request $request) {
        $validasi = $request->validate([
            'nis' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validasi)) {
            $request->session()->regenerate();
            if(auth()->user()->role === 'admin' || auth()->user()->role === 'guru' ) {
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/');
        }
        return back();
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/login');
    }
}
