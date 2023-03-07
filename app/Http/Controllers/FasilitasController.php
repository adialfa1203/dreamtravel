<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function fasilitas(){
        $data=fasilitas::all();

        return view('admin_travel.fasilitas.fasilitas',compact('data'));
    }
}
