<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['travel','tujuan','jemput','nama','penumpang','berangkat','pulang'];
    protected $table = 'pesanan';
    public $timestamps = false;
}
