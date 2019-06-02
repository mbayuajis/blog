<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    //
    protected $table = 'lowonganpekerjaan'; //menmberitahu laravel bahwa tabel di database bernama pegawai, bukan pegawais
    protected $fillable = ['nama_pekerjaan','deskripsi_pekerjaan','syarat_pekerjaan'];//data yang ingin di isi
}
