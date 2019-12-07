<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
		<title>SIP</title>
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

	<body class="fix-header fix-sidebar card-no-border">
		<div class="preloader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
		</div>
		<div id="main-wrapper">
			<header class="topbar">
				<nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
					<div class="navbar-header">
						<a class="navbar-brand" href="{{ url('/dashboard') }}">
							<b><img src="{{URL::asset('/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" /></b>
							<span>
								<img src="{{URL::asset('/images/logo-light-text.png')}}" alt="homepage" class="light-logo" />
							</span>
						</a>
					</div>
					<div class="navbar-collapse">
						<ul class="navbar-nav mr-auto mt-md-0">
							<li class="nav-item">
								<a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
									<i class="mdi mdi-menu"></i>
								</a>
							</li>
							<li class="nav-item hidden-sm-down search-box">
								<a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
									<i class="ti-search"></i>
								</a>
								<form class="app-search">
									<input type="text" class="form-control" placeholder="Cari Data lalu Tekan Enter">
									<a class="srh-btn">
										<i class="ti-close"></i>
									</a>
								</form>
							</li>
						</ul>
						<ul class="navbar-nav my-lg-0">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/1.jpg') }}" alt="user" class="profile-pic m-r-10" />Markarn Doe</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="left-sidebar">
				<div class="scroll-sidebar">
					<nav class="sidebar-nav">
						<ul id="sidebarnav">
							<li>
								<a class="waves-effect waves-dark" href="{{ url('/dashboard') }}" aria-expanded="false">
									<i class="mdi mdi-gauge"></i>
									<span class="hide-menu">Dashboard</span>
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false">
									<i class="mdi mdi-account-check"></i>
									<span class="hide-menu">Profile</span>
								</a>
							</li>							
							<li>
								<a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false">
									<i class="mdi mdi-table"></i>
									<span class="hide-menu">Data Barang</span>
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="{{ url('/divisi') }}" aria-expanded="false">
									<i class="mdi mdi-contacts"></i>
									<span class="hide-menu">Data Divisi</span>
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="{{ url('/karyawan') }}" aria-expanded="false">
									<i class="mdi mdi-account-multiple"></i>
									<span class="hide-menu">Data Karyawan</span>
								</a>
							</li>
							<li>
								<a class="waves-effect waves-dark" href="icon-material.html" aria-expanded="false">
									<i class="mdi mdi-account-card-details"></i>
									<span class="hide-menu">SPK Kontrak Karyawan</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="sidebar-footer">
					<a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
					<a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
					<a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
				</div>
			</aside>
			<div class="page-wrapper">
				<!-- get contents from each page -->
				@yield('content')
				<footer class="footer">PT. Mitrahasanah Sukadamai Nagrek © 2019</footer>
			</div>
		</div>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/jquery/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/bootstrap/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/jquery.slimscroll.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/waves.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/sidebarmenu.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/custom.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/d3/d3.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/c3-master/c3.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/dashboard1.js') }}"></script>
	</body>
</html>
