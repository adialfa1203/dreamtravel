<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.profile.indexprofile',compact(['users']));
         
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
        return view ('users.profile.indexprofile');
    }
    
    public function indextentangkami()
    {
        return view ('users.tentangkami.indextentangkami');
    }

    public function edit()
    {
        return view('users.profile.editprofile');
    }

}
