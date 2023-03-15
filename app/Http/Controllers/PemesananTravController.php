<?php

namespace App\Http\Controllers;

use App\Models\pemesanantrav;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PemesananTravController extends Controller
{
    public function index()
    {
        
            $data = pemesanantrav::orderBy('id','desc')->get();
        
       
        return view ('admin_travel.pesanan.index')->with('data', $data);
    }
    public function pemesananproses(Request $request)
    {
       $request->validate([
            'nama' => 'required|max:255',
            'notelp' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'jemput' => 'required|max:255',
            'penumpang' => 'required|max:255',
            'berangkat' => 'required',
            'pulang' => 'required',
        ],[
            // 'password.same' => 'Konfirmasi Password Tidak Sesuai',
            // 'email.unique' => 'Email Sudah Terdaftar',
        ]);
        
                
        // $user = User::create($request->all());
        
        pemesanantrav::create([
            'nama' => $request -> nama,
            'notelp' => $request -> notelp,
            'tujuan' => $request -> tujuan,
            'jemput' => $request-> jemput,
            'penumpang' => $request ->penumpang,
            'berangkat' => $request -> berangkat,
            'pulang' => $request -> pulang,

        ]);
        // $request->session()->flash('status', 'Task was successful!');
        return redirect('pemesanan');
    }


    public function hpus($id)  
    {
        $data = pemesanantrav::find($id);
        $data->delete();
        return redirect()->back();
    }
}
