<?php

namespace App\Http\Controllers;

use App\Models\detail_tujuan;
use Illuminate\Http\Request;

class DetailTujuanController extends Controller
{
    public function detail_tujuan(){
        $data=detail_tujuan::all();

        return view('admin_travel.detail_tujuan.detail_tujuan',compact('data'));
    }
}
