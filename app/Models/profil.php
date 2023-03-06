<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $fillable = ['foto','nama','status','kota','ulang_tahun','notelp','email','negara','deskripsi','password'];
    protected $table = 'profil';
    public $timestamps = false;
}
