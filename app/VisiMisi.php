<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
  protected $table = 'visimisi'; //menmberitahu laravel bahwa tabel di database bernama pegawai, bukan pegawais
  protected $fillable = ['visi','misi'];//data yang ingin di isi

}
