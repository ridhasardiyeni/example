<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='mahasiswas';
    protected $primaryKey ='id_mahasiswa';
    protected $fillable=['nim','nama_mahasiswa','jk','alamat'];
}
