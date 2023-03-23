<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class GrafikController extends Controller
{
    public function getData()
{
    $data = DB::table('users')
               ->select(DB::raw('SUM(nama) as   nama'), DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') as date"))
               ->groupBy('date')
               ->get();

    return response()->json($data);
}


}
