<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primarykey = 'id';
    protected $fillable = ['nama','nim','prodi_id','jenis_kelamin','kelas','semester'];

    public function prodi()
    {
    	return $this->belongsTo(Prodi::class);
    }
}

