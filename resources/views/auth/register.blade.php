<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register | SI Perpustakaan</title>
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
			<h3 style="color: green; font-weight: bold;">
				Sistem Informasi Perpustakaan
			</h3>
		</div>

		<div class="login-box-body text-center">
			<img src="{{ asset('dist/img/logo.png') }}" width="160px" />
			<br>
			<p class="login-box-msg">Register System</p>

			{{-- Alert success --}}
			@if (session('success'))
				<script>
					Swal.fire({
						icon: 'success',
						title: 'Berhasil',
						text: '{{ session('success') }}',
						confirmButtonText: 'OK'
					});
				</script>
			@endif

			{{-- Alert error --}}
			@if ($errors->any())
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Terjadi Kesalahan',
						text: '{{ $errors->first() }}',
						confirmButtonText: 'OK'
					});
				</script>
			@endif

			<form action="{{ url('/register') }}" method="POST">
				@csrf

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="name" placeholder="Full Name" required value="{{ old('name') }}">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="btnregister" title="Daftar Akun">
							<b>Register</b>
						</button>
					</div>
				</div>
			</form>

			<p class="mt-3 text-center">
				Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
			</p>
		</div>
	</div>

	<!-- jQuery 2.2.3 -->
	<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
