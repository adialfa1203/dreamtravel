<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaWebController extends Controller
{
    public function index()
    {
        return view ('users.beranda.index');
    }

    public function indexdetailkendaraan()
    {
        return view ('users.detailkendaraan.indexdetailkendaraan');
    }

    public function indexdetailtravel()
    {
        return view ('users.detailtravel.indexdetailtravel');
    }

    public function indexfaq()
    {
        return view ('users.faq.indexfaq');
    }
    
    public function indexhasilpencarian()
    {
        return view ('users.hasilpencarian.indexhasilpencarian');
    }

    public function indexkontak()
    {
        return view ('users.kontak.indexkontak');
    }

    public function indexpesan()
    {
        return view ('users.pesan.indexpesan');
    }   

    public function indexprofile()
    {
       
        return view('users.profile.indexxxprofile');
    }
    
    public function indextentangkami()
    {
        return view ('users.tentangkami.indextentangkami');
    }

    // public function proff()
    // {
    //     Return view('users.proff.index');
    // }
    public function editprofile()
    {
       return view('users.profile.editprofile');
    }

    public function update(Request $request,$id)
    {
        $validateddata=$request->validate([
            'email'=>'required|unique:users,email,'.$request->id.',id',
            'nama'=>'required',
            'alamat'=>'required',
            'tanggal'=>'required',
            'no'=>'required',
            // 'password'=>'required'
            // 'status'=>'required|unique:users,status'.$request->id.',id',
            // 'email'=>'required|unique:users,email'.$request->id.',id'
        ]);
        $data = User::find($id);
        $data->update($request->all());
        return redirect('profile');
    }

}
