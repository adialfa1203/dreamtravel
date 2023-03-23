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
        $travel = travel::orderBy('id','desc')->get();
        $fasilitas = fasilitas::orderBy('id','desc')->get();
        $harga = detail_harga::orderBy('id','desc')->get();
        $tujuan = detail_tujuan::orderBy('id','desc')->get();

        return view('admin_travel.tambah_data.index');
    }
    public function insert_data_to_two_tables(Request $request)
    {
        
    $foto_file = $request->file('foto');
    $foto_ekstensi = $foto_file->extension();
    $foto_nama = date('ymdhis').".".$foto_ekstensi;
    $foto_file->move(public_path('fotoitu'), $foto_nama);
    $travel = travel::create([
        'plat' => $request -> plat,
        'nama_kendaraan' => $request -> nama_kendaraan,
        'kategori' => $request -> kategori,
        'foto' => $foto_nama,
    ]);
   
    // Simpan data ke dalam tabel 'fasilitas'
    $fasilitas= fasilitas::create([
        'plat' => $travel->plat,
        'nama_fasilitas' => $request-> nama_fasilitas,
    ]);

    // Simpan data ke dalam tabel 'detail_harga'
    $detail_harga = detail_harga::create([
        'plat' => $travel->plat, // Gunakan ID dari tabel travel untuk dijadikan foreign key
        'dewasa' => $request->dewasa,   
        'anak' => $request->anak,
    ]);

    // Simpan data ke dalam tabel 'detail_tujuan'
    $detail_tujuan = detail_tujuan::create([
        'plat' => $travel->plat, // Gunakan ID dari tabel travel untuk dijadikan foreign key
        'tujuan' => $request -> tujuan,
        'berangkat' => $request -> berangkat,
        'pemberangkatan' => $request -> pemberangkatan,
        'jam' => $request -> jam,
    ]);
        return redirect()->back();

    }
//     public function delete_editor($id)
//     {
//         $travel = travel::find($id);
//         // unlink(public_path('foto/' . $travel->foto));
//         $travel->delete();
//         return redirect()->back()->with('success', 'Berhasil Hapus');
//     }

    public function delete_travel($id)
    {
        $travel = travel::find($id);
        $travel->delete();
        return redirect()->back();
    }

    public function delete_fasilitas($id)
    {
        $fasilitas = fasilitas::find($id);
        $fasilitas->delete();
        return redirect()->back();
    }

    public function delete_harga($id)
    {
        $harga = detail_harga::find($id);
        $harga->delete();
        return redirect()->back();
    }

    public function delete_tujuan($id)
    {
        $tujuan = detail_tujuan::find($id);
        $tujuan->delete();
        return redirect()->back();
    }
}
