<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama','nim','prodi_id','jenis_kelamin','kelas','semester','kd_prodi'];

    public function prodi()
    {
    	return $this->belongsTo(Prodi::class);
    }

}
