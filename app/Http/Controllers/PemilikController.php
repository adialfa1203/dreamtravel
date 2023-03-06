<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        
            $data = pemilik::orderBy('id','desc')->get();
            // dd($data);
        
       
        return view ('admin.pemiliktravel.index')->with('data', $data);
    }
    
    public function update( $id)
    {
        $data = pemilik:: find($id);
        return view('admin.pemiliktravel.edit',compact('data'));
    }

    public function deletepemilik($id)  
    {
        $data = pemilik::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function detail($id)
    {
        $data = pemilik::find($id);

        return view ('admin.pemiliktravel.detail')->with('data', $data);
    }
    
}