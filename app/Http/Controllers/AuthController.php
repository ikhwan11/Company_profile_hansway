<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/log-in', [
            'title' => 'Log in',
        ]);
    }
    public function admin()
    {
        return view('back_end/dashboard-admin', [
            'title' => 'Adminstrator Page',
            'user' => User::count(),
            'konten' => News::count(),
        ]);
    }

    public function auth(Request $request)
    {
        $datalogin = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($datalogin)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role == '1') {
                return redirect()->intended('/Admin');
            } elseif ($user->role == '2') {
                return redirect()->intended('/Admin');
            } elseif ($user->role == '3') {
                return redirect()->intended('/Career-management');
            }
        }

        return back()->with('pesan', 'Email atau password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
