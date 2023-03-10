<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;
    protected $fillable = ['noplat','nama_kendaraan','kategori_kendararaan','foto_kendaraan'];
    protected $table = 'detail';
    public $timestamps = false;

    public function pemilik(){
        return $this->belongsTo(pemilik::class, 'travel');
    }
}
