<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        $user = Auth::user();

        // 2. Pengecekan Peran (Role)
        // Cek apakah peran pengguna ada di dalam daftar peran yang diizinkan ($roles)
        if (!in_array($user->role, $roles)) {

            // Logika Pengalihan Berdasarkan Peran Pengguna
            if ($user->role === 'admin') {
                // Arahkan admin yang mencoba mengakses route user ke dashboard admin
                return redirect()->route('admin.dashboard')->with('error', 'Akses Ditolak. Anda tidak memiliki izin untuk halaman ini.');
            }

            if ($user->role === 'user') {
                // Arahkan user yang mencoba mengakses route admin ke dashboard user
                return redirect()->route('user.dashboard')->with('error', 'Akses Ditolak. Anda tidak memiliki izin untuk halaman ini.');
            }

            // Fallback: Jika role tidak terdefinisi (seharusnya tidak terjadi dengan ENUM)
            return redirect('/')->with('error', 'Akses Ditolak.');
        }
        return $next($request);
    }
}
