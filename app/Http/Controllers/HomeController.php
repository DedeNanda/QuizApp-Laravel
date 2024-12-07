<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function login()
    {
        $data = array(
            "title" => "Home Login",
        );

        $user = Auth::user();

        if ($user) {
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } else if ($user->level == 'user') {
                return redirect()->intended('user');
            }
        }

        return view("login", $data);
    }

    public function proses_login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Cek apakah akun diblokir
            if ($user->blocked_until && now()->lessThan($user->blocked_until)) {
                return redirect()->back()->with('login_gagal', 'Akun Anda diblokir sementara. Silakan coba lagi nanti.');
            }

            // Validasi kredensial
            $credential = $request->only('email', 'password');

            if (Auth::attempt($credential)) {
                // Reset percobaan login jika berhasil
                $user->update([
                    'login_attempts' => 0,
                    'blocked_until' => null
                ]);

                // Redirect berdasarkan level user
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } else if ($user->level == 'user') {
                    return redirect()->intended('user');
                }

                return redirect()->intended('/');
            }

            // Increment login attempts jika gagal login
            $user->increment('login_attempts');

            if ($user->login_attempts >= 3) {
                $user->update(['blocked_until' => now()->addMinutes(10)]);
                return redirect()->back()->with('login_gagal', 'Akun Anda diblokir sementara setelah terlalu banyak percobaan login.');
            }

            return redirect()->back()->with('login_gagal', 'Email atau password salah!');
        }

        // Jika user tidak ditemukan
        return redirect()->back()->with('login_gagal', 'Email atau password salah!');
    }

    public function register()
    {
        $data = array(
            "title" => "Register User"
        );

        return view("register", $data);
    }

    public function proses_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus minimal :min karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $request['level'] = 'user';
        $request['password'] = bcrypt($request->password);

        User::create($request->all());

        return redirect()->route('login')->with('success', 'Akun telah berhasil dibuat! Silakan login.');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        Auth::logout();
        return Redirect('/');
    }
}
