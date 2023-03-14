<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanantrav extends Model
{
    use HasFactory;
    protected $fillable = ['nama','notelp','tujuan','jemput','penumpang','berangkat','pulang'];
    protected $table = 'pesanan';
    public $timestamps = false;
}
