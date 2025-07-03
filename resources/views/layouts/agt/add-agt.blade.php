@extends('app')
@section('content')
<section class="content-header">
	<h1>
		Master Data
		<small>Data anggota</small>
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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah anggota</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{ url('/add-agt') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label>Nama Anggota</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anggota"
							 required>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jekel" class="form-control" required>
								<option value="">Pilih Jenis Kelamin</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
						</div>
						<div class="form-group">
							<label>No HP</label>
							<input type="text" name="no_hp" class="form-control" placeholder="No HP" required>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="{{ url('/data-agt') }}" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
