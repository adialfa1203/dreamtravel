<?php

namespace App\Http\Controllers;

use App\Models\hubungikami;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class HubungiKamiController extends Controller
{

    public function index()
    {
        # code...
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required',
            'Pesan' => 'required|max:225',
        ],[
        ]);
        
                
        // $user = User::create($request->all());
        
        hubungikami::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'pesan' => $request -> pesan,

        ]);
        return redirect('faq');
    }
}
