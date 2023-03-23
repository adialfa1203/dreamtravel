<?php

namespace App\Http\Controllers;

use App\Models\travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function travel(){
        $data=travel::all(); 

        return view('admin_travel.travel.travel',compact('data'));
    }
    
}
