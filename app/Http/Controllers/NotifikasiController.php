<?php

namespace App\Http\Controllers;

use App\Models\notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        
            $data = notifikasi::orderBy('id','desc')->get();
        
       
        return view ('admin.notifikasi.semuanotifikasi')->with('data', $data);
    }

    public function deletnotif($id)  
    {
        $data = notifikasi::find($id);
        $data->delete();

        return redirect()->back();
    }
}
