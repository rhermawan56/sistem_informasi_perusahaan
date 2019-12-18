<!-- this is to call layout -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
		<title>SIP-Karyawan</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/bootstrap/css/bootstrap.min.css') }}" >

		<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/chartist-js/dist/chartist.min.css') }}" >
		<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/chartist-js/dist/chartist-init.css') }}" >
		<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" >

		<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/c3-master/c3.min.css') }}" >
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
		<link rel="stylesheet" type="text/css" href="{{ asset('css/colors/blue.css') }}" >
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>

	@extends('layout')

	@section('content')
		<html stuff>

		<!-- dynamic contents -->
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 col-8 align-self-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ url('/karyawan') }}">Data Karyawan</a></li>
						<li class="breadcrumb-item active">Tambah</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<!-- Column -->
				<div class="col">
					<div class="card">
						<div class="card-block">
							<form method="post" action="/karyawan/store">
								{{ csrf_field() }}

								<p><i>*Harap isi semua data</i></p>
								<div class="row">
									<div class="col">
										<label for="nomor_induk">Nomor Induk</label>
										<input type="text" name="nomor_induk" class="form-control">

										@if($errors->has('nomor_induk'))
											<div class="text-danger">
												<i>{{ $errors->first('nomor_induk')}}</i>
											</div>
										@endif
									</div>
									<div class="col">
										<label for="nomor_telepon">Nomor Telepon</label>
										<input type="text" name="nomor_telepon" class="form-control">

										@if($errors->has('nomor_telepon'))
											<div class="text-danger">
												<i>{{ $errors->first('nomor_telepon')}}</i>
											</div>
										@endif
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col">
										<label for="nama_depan">Nama Depan</label>
										<input type="text" name="nama_depan" class="form-control">

										@if($errors->has('nama_depan'))
											<div class="text-danger">
												<i>{{ $errors->first('nama_depan')}}</i>
											</div>
										@endif
									</div>
									<div class="col">
										<label for="nama_belakang">Nama Belakang</label>
										<input type="text" name="nama_belakang" class="form-control">

										@if($errors->has('nama_belakang'))
											<div class="text-danger">
												<i>{{ $errors->first('nama_belakang')}}</i>
											</div>
										@endif
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col">
										<label for="alamat">Alamat</label>
										<input type="text" name="alamat" class="form-control">

										@if($errors->has('alamat'))
											<div class="text-danger">
												<i>{{ $errors->first('alamat')}}</i>
											</div>
										@endif
									</div>
									<!-- <div class="col">
										<label for="divisi">Divisi</label>
										<input type="text" class="form-control">
									</div> -->
								</div>
								<br>
								<!-- <div class="row">
									<div class="col-6">
										<label for="jabatan">Jabatan</label>
										<input type="text" class="form-control">
									</div>
								</div> -->
								<!-- simpan data -->
								<br>
								<button type="submit" class="btn btn-outline-success" data-toggle="tooltip" data-placement="bottom" title="Simpan" value="Simpan">
									<i class="mdi mdi-content-save"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	@stop
</html>