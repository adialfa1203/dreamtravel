<?php

namespace App\Http\Controllers;

use App\Models\profil_travel;
use Illuminate\Http\Request;

class ProfilTravelController extends Controller
{
    public function index()
    {
        
            $data = profil_travel::orderBy('id','desc')->get();
        
       
        return view ('admin_travel.profile.index')->with('data', $data);
    }
    
    public function update( $id)
    {
        $data = profil_travel:: find($id);
        return view('admin_travel.profile.edit',compact('data'));
    }

    public function deleteprofil($id)  
    {
        $data = profil_travel::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function create()
    {
        return view('admin_travel.profile.edit');
    }
}
