<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        
            $data = profil::orderBy('id','desc')->get();
        
       
        return view ('admin.profil.index')->with('data', $data);
    }
    
    public function update( $id)
    {
        $data = profil:: find($id);
        return view('admin.profil.edit',compact('data'));
    }

    public function deleteprofil($id)  
    {
        $data = profil::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function create()
    {
        return view('admin.profil.edit');
    }
}
