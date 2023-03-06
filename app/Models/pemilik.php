<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;
    protected $fillable = ['nama','travel','logo','alamat','notelp','email','noplat','nama_kendaraan','kategori_kendaraan','foto_kendaraan'];
    protected $table = 'pemilik';
    public $timestamps = false;

    public function detail(){   
        return $this->hasMany(detail::class);
    }
}
