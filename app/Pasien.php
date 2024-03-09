<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['nama','nrm','tempat_lahir','tanggal_lahir','gender','alamat','nomor_jamkes'];
}
