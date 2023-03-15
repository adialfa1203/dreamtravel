<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Fluent\Concerns\Has;

class  AuthController extends Controller
{
    public function login()
    {
        return view('admin.login.index');
    }

    public function register()
    {
        return view('admin.register.index');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // dd($request->all());
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            //cek apakah user aktif
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'Gagal Login');
                Session::flash('message', 'Akun Anda Tidak Aktif Sekarang, Silahkan Hubungi Admin!');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if (Auth::user()-> role_id == 1) {
                return redirect('admin');
            }
            if (Auth::user()-> role_id == 2) {
                return redirect('beranda_travel');
            }
            if (Auth::user()-> role_id == 3) {
                return redirect('/');
            }

            // $request->session()->regenerate();
            // return redirect()->intended('dashboard');
        }
        Session::flash('status', 'Gagal Login');
        Session::flash('message', 'Email/Password Yang Anda Masukkan Salah');
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function registerProcess(Request $request)
    {
       $request->validate([
            'nama' => 'required|min:2|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8|max:32',
            'alamat' => 'required|min:4|max:255',
            'no' => 'required|min:11|max:255',
            'tanggal' => 'required|max:255',
        ],[
            // 'password.same' => 'Konfirmasi Password Tidak Sesuai',
            'email.unique' => 'Email Sudah Terdaftar',
        ]);
        
                
        // $user = User::create($request->all());
        
        User::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'alamat' => $request -> alamat,
            'password' => $request->password,
            'password' => bcrypt($request->password),
            // 'remember_token' => Str::random(60),
            'no' => $request ->no,
            'tanggal' => $request -> tanggal,
            'role_id' => 3

        ]);
        // $request->password = Hash::make($request -> password);
        Session::flash('status', 'success');
        Session::flash('message', 'Daftar berhasil');
        return redirect('register');
    }
}
