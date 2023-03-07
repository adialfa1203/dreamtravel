<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori(){
        $data=kategori::all();

        return view('admin_travel.kategori.kategori',compact('data'));
    }
}
