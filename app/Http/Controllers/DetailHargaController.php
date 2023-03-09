<?php

namespace App\Http\Controllers;

use App\Models\detail_harga;
use Illuminate\Http\Request;

class DetailHargaController extends Controller
{
    public function detail_harga(){
        $data=detail_harga::all();

        return view('admin_travel.detail_harga.detail_harga', compact ('data'));
    }
}
