<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai'; //menmberitahu lravel bahwa tabel di database bernama pegawai, bukan pegawais
    protected $guarded = [];//data yang ingin di isi
}
