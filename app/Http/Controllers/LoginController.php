<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login', [
            "title" => 'Login',
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Mengecek Status Aktif dan tidak
            if ($user->status == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                Auth::logout();
                return back()->with('error', 'Your account is not active.');
            }
        }

        return back()->with('error', 'Username & Password do not match');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
