<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        
    try{
        // Validasi data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|max:8',
        ]);

        // Simpan pengguna ke database
        DB::table('users')->insert([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
            'role' => $request->role, 

        ]);

        return response()->json([
            'message' => 'Registration successful!
        '], 201);
    } catch (\Exception $e) {
           return response()->json([
            'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
    }
    }

    public function login(Request $request)
    {
        // Validasi data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil pengguna dari database
        $user = DB::table('users')->where('username', $request->username)->first();

        // Cek apakah pengguna ada dan password benar
        if ($user && Hash::check($request->password, $user->password)) {
            // Cek role pengguna
            if ($user->role === 'admin') {
                // Redirect ke halaman dashboard jika role adalah admin
                return redirect()->route('superadmin')->with('message', 'Login successful as Admin!');
            } elseif ($user->role === 'petugas') {
                // Redirect ke halaman utama jika role adalah user
                return redirect()->route('dashboard')->with('message', 'Login successful as Petugas!');
            } else {
                // Penanganan jika role tidak sesuai (misal role tidak terdefinisi)
                return response()->json(['message' => 'Unknown role'], 403);
            }
        }

        // Jika login gagal, tampilkan pesan error
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // Mengubah role user
  
}
