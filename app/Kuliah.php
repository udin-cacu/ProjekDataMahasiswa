<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliah extends Model
{
	protected $table = 'kuliah';
    protected $fillable = ['nim','nama_mk','hari','jam'];

}
