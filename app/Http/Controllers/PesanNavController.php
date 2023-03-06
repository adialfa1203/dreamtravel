<?php

namespace App\Http\Controllers;

use App\Models\pesannav;
use Illuminate\Http\Request;

class PesanNavController extends Controller
{
    public function index()
    {
        
            $data = pesannav::orderBy('id','desc')->get();
        
       
        return view ('admin.pesan-navbar.semuapesan')->with('data', $data);
    }

    public function deletpesan($id)  
    {
        $data = pesannav::find($id);
        $data->delete();
        return redirect()->back();
    }
}
