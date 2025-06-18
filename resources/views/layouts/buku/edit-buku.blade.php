@extends('app')
@section('content')
<section class="content-header">
	<h1>
		Master Data
		<small>Data Buku</small>
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
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah buku</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label>Id Buku</label>
							<input type='text' class="form-control" name="id_buku" value="B001"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Judul Buku</label>
							<input type='text' class="form-control" name="judul_buku" value="Komet"
							/>
						</div>

						<div class="form-group">
							<label>Pengarang</label>
							<input type='text' class="form-control" name="pengarang" value="Andrea Hirata"
							/>
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input class="form-control" name="penerbit" value="Bentang Pustaka"
							/>
						</div>

						<div class="form-group">
							<label>Th Terbit</label>
							<input class="form-control" name="th_terbit" value="2018">
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="data-buku" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
