<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
	<!-- Select2 -->
	<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-green sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		@include('partials.header')

		<!-- =============================================== -->

		@include('partials.sidebar')

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
                <!-- Your Page Content Here -->
				@yield('content')
			</section>
			<!-- /.content -->
		</div>

		<!-- /.content-wrapper 

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
			</div>
			<strong>Copyright &copy;
				<a href="https://www.facebook.com/">Muhammad Ivan Setiawan</a>.</strong> All rights reserved.
		</footer>
		<div class="control-sidebar-bg"></div>
		-->

		<!-- ./wrapper -->

		<!-- jQuery 2.2.3 -->
		<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
			 
		<!--Bootstrap 3.3.6 -->
			
		<script src = "{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
		

		<script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
		<!-- DataTables -->
		<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

		<!-- AdminLTE App -->
		<script src="{{ asset('dist/js/app.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('dist/js/demo.js') }}"></script>
		<!-- page script -->


		<script>
			$(function() {
				$("#example1").DataTable({
					columnDefs: [{
						"defaultContent": "-",
						"targets": "_all"
					}]
				});
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			});
		</script>

		<script>
			$(function() {
				//Initialize Select2 Elements
				$(".select2").select2();
			});
		</script>
</body>

</html>
