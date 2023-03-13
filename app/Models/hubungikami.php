<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hubungikami extends Model
{
    use HasFactory;
    protected $fillable = ['nama','email','pesan'];
    protected $table = 'hubungikami';
    public $timestamps = false;
}
