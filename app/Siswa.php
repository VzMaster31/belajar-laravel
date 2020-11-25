<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama', 'telepon', 'alamat'];
    // Mass Assignment
    protected $table = "siswa";
}
