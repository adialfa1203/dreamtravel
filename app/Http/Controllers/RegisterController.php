<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register.index', [
            'title' => 'Register',
            'active'=>'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'name' => 'required|max:225',
            'name' => ['required','min:3','max:255', 'unique:users'],
            'email' =>  'required|email:dns|unique:users',
            'password' => 'required|min:5|max:225',
            'alamat' => 'required|min:5|max:225',
            'notelp' => 'required|min:5|max:12',
            'tanggallahir' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        

        return redirect('login');
    }
}
