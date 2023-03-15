<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view ('admin.pengguna.index', compact(['data']));
    }
    
    // public function update( $id)
    // {
    //     $data = pengguna:: find($id);
    //     return view('admin.pengguna.edit',compact('data'));
    // }

    // public function destroy($id)  
    // {
    //     $data = pengguna::find($id);
    //     $data->destroy();
    //     return redirect()->back();
    // }
    public function delete($id)  
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
}
