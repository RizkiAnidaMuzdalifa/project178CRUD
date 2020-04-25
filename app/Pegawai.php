<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'data';
    protected $fillable = ['nik','nama','agama','no_hp','alamat'];
}
