<?php

namespace App\Http\Controllers;

use App\Models\detail_harga;
use App\Models\detail_tujuan;
use App\Models\fasilitas;
use Illuminate\Http\Request;
use App\Models\travel;

class TambahDataController extends Controller
{
    public function index()
    {
        return view('admin_travel.tambah_data.index');
    }
    public function insert_data_to_two_tables(Request $request)
    {
        travel::create([
            'plat' => $request -> plat,
            'nama_kendaraan' => $request -> nama_kendaraan,
            'kategori' => $request -> ketegori,
            'foto' => $request -> foto,
        ]);

        fasilitas::create([
            'nama_fasilitas' => $request -> nama_fasilitas,
        ]);

        detail_harga::create([
            'dewasa' => $request -> dewasa,
            'anak' => $request -> anak,
        ]);

        detail_tujuan::create([
            'tujuan' => $request -> tujuan,
            'pemberangkatan' => $request -> pemberagkatan,
            'jam' => $request -> jam,
        ]);

    }
}
