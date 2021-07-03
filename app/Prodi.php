<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $fillable = ['kode_prodi','nama_prodi'];

    public function Siswa()
    {
    	return $this->hasMany(Siswa::class);
    }
}
