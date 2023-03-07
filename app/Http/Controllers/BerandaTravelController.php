<?php

namespace App\Http\Controllers;

use App\Models\beranda_travel;
use Illuminate\Http\Request;

class BerandaTravelController extends Controller
{
   public function beranda_travel(){
    return view('admin_travel.layout.beranda_travel');
   }
}
