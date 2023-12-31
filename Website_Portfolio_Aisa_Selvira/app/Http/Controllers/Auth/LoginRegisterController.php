<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendMailJob;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'dashboard'
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => "Selamat Datang di Web Portfolio Aisa Selvira",
            'body' => "Anda telah mengunjungi situs Web Portfolio Aisa Selvira. Yuk, kepoin situs ini untuk melihat karya-karya Aisa Selvira."
        ];

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();

        dispatch(new SendMailJob($data));

        return redirect()->route('dashboard')->withSucces('Berhasil Register!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSucces('Berhasil Login!');
        }
        return back()->withErrors([
            'email' => "Email tidak sesuai"
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }

        return redirect()->route('login')->withErrors([
            'email' => "Silahkan untuk login terlebih dahulu"
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withSucces("Berhasil logout");
    }
}
