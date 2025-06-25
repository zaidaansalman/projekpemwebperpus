<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login | SI Perpustakaan</title>
	<link rel="icon" href="{{ asset('dist/img/logo.png') }}">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<h3 style="color: green; font-weight: bold;">Sistem Informasi Perpustakaan</h3>
		</div>

		<div class="login-box-body text-center">
			<img src="{{ asset('dist/img/logo.png') }}" width="160px" />
			<br>

			<p class="login-box-msg">Login System</p>

			<!-- Alert Error Message -->
			@if ($errors->any())
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Login Gagal',
						text: '{{ $errors->first() }}',
						confirmButtonText: 'OK'
					});
				</script>
			@endif

			@if (session('success'))
				<script>
					Swal.fire({
						icon: 'success',
						title: 'Sukses',
						text: '{{ session('success') }}',
						confirmButtonText: 'OK'
					});
				</script>
			@endif

			<form action="{{ url('/login') }}" method="POST">
				@csrf
				<div class="form-group has-feedback">
					<input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-success btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
							<b>Masuk</b>
						</button>
					</div>
				</div>

				<div class="mt-3">
					<p class="text-center">
						<a href="{{ route('register') }}" class="text-center">Belum punya akun? Daftar disini</a>
					</p>
				</div>
			</form>
		</div>
	</div>

	<!-- jQuery 2.2.3 -->
	<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
