<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BengkelController extends Controller
{
     public function index()
    {
        return view("login");
    }

    public function aksiLogin(Request $request)
    {
        $user = DB::table('users')
            ->where('email', $request->input('email'))
            ->where('password_hash', $request->input('password'))
            ->first();

        if ($user) {
            session([
                'u' => $user->nama,
                'id_user' => $user->id,
                'email' => $user->email,
                'id_jabatan' => $user->id_jabatan
            ]);

            return redirect('/home');
        } else {
            return redirect('/login')
                ->with('error', 'Email atau Password salah!');
        }
    }

    public function home()
    {
        if (session('u')) {
            return view('home');
        }

        return redirect('/login');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }

    public function formRegister()
    {
        $jabatan = DB::table('jabatan')->get();

        return view('register', compact('jabatan'));
    }

    public function aksiRegister(Request $request)
    {
        DB::table('users')->insert([
            'id_jabatan' => $request->input('id_jabatan'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'password_hash' => $request->input('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/login')
            ->with('success', 'Registrasi berhasil, silakan login!');
    }
}