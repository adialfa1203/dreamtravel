<?php

namespace App\Http\Controllers;

use App\Models\pemesanantrav;
use Illuminate\Http\Request;

class PemesananTravController extends Controller
{
    public function index()
    {
        
            $data = pemesanantrav::orderBy('id','desc')->get();
        
       
        return view ('admin_travel.pesanan.index')->with('data', $data);
    }
    
    // public function update( $id)
    // {
    //     $data = pesanan:: find($id);
    //     return view('admin.pesanan.edit',compact('data'));
    // }


    public function hps($id)  
    {
        $data = pemesanantrav::find($id);
        $data->delete();
        return redirect()->back();
    }
}
