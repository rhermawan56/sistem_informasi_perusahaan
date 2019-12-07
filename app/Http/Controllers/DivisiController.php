<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Divisi;

class DivisiController extends Controller
{
	// menampilkan semua data
	public function index()
	{
		$divisi = Divisi::all();
		return view('divisi', ['divisi' => $divisi]);
	}

	// manambah data
	public function tambah()
	{
		return view('divisi_tambah');
	}

	// validasi data
	public function store(Request $request)
	{
		$this->validate($request,[
			'nama' => 'required'
		]);

			Divisi::create([
			'nama' => $request->nama
		]);

		return redirect('/divisi');
	}

	// mengubah data
	public function edit($id)
	{
		 $divisi = Divisi::find($id);
		 return view('divisi_edit', ['divisi' => $divisi]);
	}

	public function update($id, Request $request)
	{
			$this->validate($request,[
			 'nama' => 'required'
			]);
	 
			$divisi = Divisi::find($id);
			$divisi->nama = $request->nama;
			$divisi->save();
			return redirect('/divisi');
	}

	// hapus data
	public function delete($id)
	{
			$divisi = Divisi::find($id);
			$divisi->delete();
			return redirect('/divisi');
	}
}
