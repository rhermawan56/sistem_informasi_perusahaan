<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
	protected $table = 'jabatan';

	// masukkan data
	protected $fillable = ['nama'];
}
