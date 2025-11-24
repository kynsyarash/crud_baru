<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Tampilkan form register
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Proses simpan data register
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255', 'unique:nasabah'],
            'password' => ['required', 'string', 'min:6', 'confirmed'], // 'confirmed' artinya harus ada input password_confirmation
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Simpan data nasabah baru
        $nasabah = Nasabah::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah daftar
        Auth::login($nasabah);

        return redirect('/home'); // arahkan ke halaman home setelah daftar
    }
}   