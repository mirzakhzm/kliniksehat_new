<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller

    {
        // Menampilkan daftar user
        public function index()
        {
            $users = User::all();
            return view('superadmin.index', compact('users'));
        }
    
        // Menambahkan user baru
        public function store(Request $request)
        {
            
        try{
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
    
            return redirect()->back()->with('success', 'User berhasil ditambahkan!');

        } catch (\Exception $e) {
               return response()->json([
                'message' => 'An error occurred: ' . $e->getMessage(),
                ], 500);
        }

        }
        // Mengubah role user
        public function update(Request $request, $id)
        {
            $request->validate([
                'role' => 'required|in:admin,petugas',
            ]);
    
            $user = User::findOrFail($id);
            $user->update(['role' => $request->role]);
    
            return redirect()->back()->with('success', 'Role user berhasil diperbarui!');
        }
    
        // Menghapus user
        public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
    
            return redirect()->back()->with('success', 'User berhasil dihapus!');
        }
    }