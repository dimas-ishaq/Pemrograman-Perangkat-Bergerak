<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view("auth.login.index");
    }

    public function register()
    {
        return view("auth.register.index");
    }

    public function resetPassword()
    {
        return view("reset-password.index");
    }

    public function loginAuth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6' // Password harus di-input dan minimal 6 karakter
        ]);

        // 2. Mencoba Autentikasi Pengguna
        // Auth::attempt akan memverifikasi password yang di-input (plain text) 
        // dengan hash password di database.
        if (Auth::attempt($validated)) {

            // Regenerasi ID sesi untuk mencegah serangan fiksasi sesi
            $request->session()->regenerate();

            $user = Auth::user();


            // 3. Pengalihan Berdasarkan Peran (Role)
            if ($user->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }

            if ($user->role === 'user') {
                return redirect()->intended(route('user.dashboard'));
            }

            // Fallback untuk role yang tidak dikenal
            return redirect()->intended(route('home'));
        }

        // 4. Autentikasi Gagal
        // Kirimkan error kembali ke halaman login jika kredensial salah
        return back()
            ->withErrors(['email' => 'Kredensial tidak cocok.'])
            ->with('error', 'Login Gagal! Silakan periksa kembali email dan password Anda.')
            ->onlyInput('email');
    }

    public function registerAuth(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6' // Password harus di-input dan minimal 6 karakter
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            // Gunakan Hash::make() untuk mengenkripsi password sebelum disimpan
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan masuk.');
    }

    public function resetPasswordAuth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
