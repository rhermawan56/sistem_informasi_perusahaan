<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Karyawan;

class KaryawanController extends Controller
{
	public function index()
	{
		$karyawan = Karyawan::all();
		return view('karyawan', ['karyawan' => $karyawan]);
	}

	public function tambah()
	{
		return view('karyawan_tambah');
	}

	public function store(Request $request)
		{
			$this->validate($request,[
				'nomor_induk' => 'required',
				'nama_depan' => 'required',
				'nama_belakang' => 'required',
				'alamat' => 'required',
				'nomor_telepon' => 'required'
			]);
 
				Karyawan::create([
				'nomor_induk' => $request->nomor_induk,
				'nama_depan' => $request->nama_depan,
				'nama_belakang' => $request->nama_belakang,
				'alamat' => $request->alamat,
				'nomor_telepon' => $request->nomor_telepon
			]);
 
			return redirect('/karyawan');
		}
}
