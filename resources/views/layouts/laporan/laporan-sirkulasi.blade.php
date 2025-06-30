@extends('app')
@section('content')
<section class="content-header">
	<h1 style="text-align:center;">
		Laporan Sirkulasi
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Si Perpustakaan</b>
			</a>
		</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
		<a href="?page=MyApp/print_laporan" title="Print" class="btn btn-success" stlye="color : green;">
				<i class="glyphicon glyphicon-print"></i>Print</a>
		</div>
		<!-- /.box-header -->


		<div class="box-body">
			<div class="table-responsive">

				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>ID SKL</th>
							<th>Buku</th>
							<th>Peminjam</th>
							<th>Tgl Pinjam</th>
							<th>Jatuh Tempo</th>
							<th>Tgl dikembalikan</th>
							<th>Denda</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>S001</td>
							<td>Buku Pemprograman PHP</td>

							<td>Pachri Kelengkeng</td>
							<td>2020-01-01</td>
							<td>2020-01-08</td>
							<td>2020-01-04</td>
							<td>Rp. 0.000</td>
						</tr>
						<tr>
							<th colspan="8" style="text-align:right; padding-right:0.90cm;">
								Total Denda Rp. 0.000
							</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection
