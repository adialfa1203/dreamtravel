<?php

namespace App\Http\Controllers;

use App\Models\tambah;
use Illuminate\Http\Request;

class TambahController extends Controller
{
    public function tambah(){
        return view('admin_travel.tambah.tambah');
    }
}
