<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
	protected $table = "karyawan";

	// masukkan data
	protected $fillable = ['nomor_induk','nama_depan','nama_belakang','alamat','nomor_telepon'];
}
