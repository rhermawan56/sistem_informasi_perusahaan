<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jabatan;

class JabatanController extends Controller
{
	// menampilkan semua data
	public function index()
	{
		$jabatan = Jabatan::all();
		return view('jabatan', ['jabatan' => $jabatan]);
	}

	// manambah data
	public function tambah()
	{
		return view('jabatan_tambah');
	}

	// validasi data
	public function store(Request $request)
	{
		$this->validate($request,[
			'nama' => 'required'
		]);

			Jabatan::create([
			'nama' => $request->nama
		]);

		return redirect('/jabatan');
	}

	// mengubah data
	public function edit($id)
	{
		 $jabatan = Jabatan::find($id);
		 return view('jabatan_edit', ['jabatan' => $jabatan]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request,[
		 'nama' => 'required'
		]);
 
		$jabatan = Jabatan::find($id);
		$jabatan->nama = $request->nama;
		$jabatan->save();
		return redirect('/jabatan');
	}

	// hapus data
	public function delete($id)
	{
		$jabatan = Jabatan::find($id);
		$jabatan->delete();
		return redirect('/jabatan');
	}
}
