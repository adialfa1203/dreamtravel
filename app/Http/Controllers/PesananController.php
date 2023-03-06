<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        
            $data = pesanan::orderBy('id','desc')->get();
        
       
        return view ('admin.pesanan.index')->with('data', $data);
    }
    
    // public function update( $id)
    // {
    //     $data = pesanan:: find($id);
    //     return view('admin.pesanan.edit',compact('data'));
    // }


    public function hps($id)  
    {
        $data = pesanan::find($id);
        $data->delete();
        return redirect()->back();
    }
}
