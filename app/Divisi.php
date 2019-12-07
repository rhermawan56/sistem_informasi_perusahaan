<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
	protected $table = "divisi";

	// masukkan data
	protected $fillable = ['nama'];
}
