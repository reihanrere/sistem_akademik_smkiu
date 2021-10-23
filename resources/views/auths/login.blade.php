<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Login</title>

{{-- 	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/favicon-16x16.png') }}"> --}}

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/style.css') }}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style>

		blockquote {
			background-color: gainsboro;
			margin-top: 15px;
		}

		blockquote p {
			font-weight: 200;
			font-style: italic;
		}

	</style>
</head>
<body class="login-page">
	
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-6">
					<img src="{{ asset('admin/image/logoo hitam.png') }}" alt="" style="width:800; " > 
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To Sistem Akademik</h2>
						</div>
						<form action="/postLogin" method="POST">
              @csrf
							<div class="input-group custom">
								<input type="text" name="nis" class="form-control form-control-lg" placeholder="Nis or email" autocomplete="off">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<blockquote class="blockquote text-center">
		<p class="mb-0">"Dibuat dengan cinta"</p>
		<footer class="blockquote-footer">By <cite title="Source Title"><a href="https://github.com/reihanrere">Reihan Renaldi</a></cite></footer>
	</blockquote>
	<!-- js -->
	<script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>
	@include('sweetalert::alert')
</body>
</html>