<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahDataController extends Controller
{
    public function index()
    {
        return view('admin_travel.tambah_data.index');
    }
    public function tambah_detail()
    {
        $request->validate([
            
        ]);
    }
}
