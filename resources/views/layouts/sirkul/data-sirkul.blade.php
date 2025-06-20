@extends('app')
@section('content')
<section class="content-header">
	<h1>
		Sirkulasi
		<small>Buku</small>
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
			<a href="add-sirkul" title="Tambah Data" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
							<th>Denda</th>
							<th>Kelola</th>
						</tr>
					</thead>
					<tbody>
							<tr>
								<td>
									1
								</td>
								<td>
									S001
								</td>
								<td>
									B001
								</td>
								<td>
									A001
									-
									Jamal Ghitani
								</td>
								<td>
									2020-01-01
								</td>
								<td>
									2020-01-08
								</td>
								<td>
									<span class="label label-primary">Masa Peminjaman</span>
								</td>

							<td>
								<a href="" onclick="return confirm('Perpanjang Data Ini ?')" title="Perpanjang" class="btn btn-success">
									<i class="glyphicon glyphicon-upload"></i>
								</a>
								<a href="" onclick="return confirm('Kembalikan Buku Ini ?')" title="Kembalikan" class="btn btn-danger">
									<i class="glyphicon glyphicon-download"></i>
								</a>
							</td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
	</div>
	<h4> *Note
		<br> Masa peminjaman buku adalah <span style="color:red; font-weight:bold;">7 hari</span> dari tanggal peminjaman.
		<br> Jika buku dikembalikan lebih dari masa peminjaman, maka akan dikenakan <span style="color:red; font-weight:bold;">denda</span>
		<br> sebesar <span style="color:red; font-weight:bold;">Rp 1.000/hari</span>.
	</h4>
</section>
@endsection
