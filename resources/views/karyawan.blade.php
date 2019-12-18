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
						<li class="breadcrumb-item active">Data Karyawan</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<!-- Column -->
				<div class="col">
					<div class="card">
						<div class="card-block">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">No. Induk</th>
										<th scope="col">Nama Lengkap</th>
										<th scope="col">Divisi</th>
										<th scope="col">Jabatan</th>
										<th scope="col"></th>
									</tr>
								</thead>
								<tbody>
									@foreach($karyawan as $k)
										<tr>
											<th scope="row">1</th>
											<td>{{ $k->nomor_induk }}</td>
											<td>{{ $k->nama_depan }}</td>
											<td></td>
											<td></td>
											<td>
												<a href="/karyawan/ubah" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="bottom" title="Ubah">
													<i class="mdi mdi-account-edit"></i>
												</a>
											</td>
											<td>
												<a href="/karyawan/hapus" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus">
													<i class="mdi mdi-delete"></i>
												</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							<a href="/karyawan/tambah" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Tambah">
								<i class="mdi mdi-account-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	@stop
</html>