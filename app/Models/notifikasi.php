<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    use HasFactory;
    protected $fillable = ['foto','nama'];
    protected $table = 'notifikasi';
    public $timestamps = false;
}
