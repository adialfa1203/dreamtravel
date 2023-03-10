<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
                return redirect('halaman');
            }
            if (Auth::user()-> role_id == 3) {
                return redirect('guest');
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
            'nama' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required_with:pass|same:pass',
            'alamat' => 'required|max:255',
            'no' => 'max:255',
            'tanggal' => 'required|max:255',
        ],[
            'password.same' => 'Konfirmasi Password Tidak Sesuai',
            'email.unique' => 'Email Sudah Ada Di Database',
        ]);

        
        // $user = User::create($request->all());
        
        User::create([
            'username' => $request -> username,
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
            'role_id' => 2
        ]);
        Session::flash('status', 'success');
        Session::flash('message', 'Daftar berhasil. Silahkan Tunggu Persetujuan Admin');
        return redirect('register');
    }
    // public function registerkomentarProcess(Request $request)
    // {
    //     $validated = $request->validate([
    //         'email' => 'required|unique:users|max:255',
    //         'password' => 'required_with:pass|same:pass',
    //     ],[
    //         'email.unique' => 'Email Sudah Ada Di Database',
    //         'password.same' => 'Konfirmasi Password Tidak Sesuai'
    //     ]);
    //     // $user = User::create($request->all());
    //     $user = User::create([
    //         'username' => $request -> username,
    //         'email' => $request -> email,
    //         'password' => Hash::make($request -> password),
    //         'status' => 'aktif',
    //         'role_id' => 4
    //     ]);
    //     // Session::flash('status', 'success');
    //     // Session::flash('message', 'Daftar berhasil. Silahkan Tunggu Persetujuan Admin');
    //     return redirect('/');
    // }
    // public function updateprofile(Request $request, $id)
    // {
    //     //dd($request->all());
    //     $data = User::find($id);
    //     $data->update($request->all());
    //     if ($request->hasFile('foto')) {
    //         // $file = $request->file('foto');
    //         // $extention = $file->getClientOriginalExtension( );
    //         // $filename = time() . '.' . $extention;
    //         // $file->move('fotouser/', $filename);
    //         // $data->foto = $filename;
    //         $data->foto = $request->file('foto')->store('fotouser', 'public');
    //     }
    //     $data->save();
    //     // Storage::disk('public')->put('foto',  $request ->file('foto'));
    //     return redirect()->back()->with('sukses', 'Data Berhasil Di Perbarui');
    // }
}
