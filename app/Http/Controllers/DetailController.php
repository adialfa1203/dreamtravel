<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\pemilik;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $data = detail::orderBy('id','desc')->get();

        return view ('admin.pemiliktravel.detail')->with('data', $data);
    }

    public function dataa($id){
        $data = pemilik::where('travel',$id)->get();
        // dd($data);

        return view('admin.pemiliktravel.dataa', compact('data'));
    }


}
