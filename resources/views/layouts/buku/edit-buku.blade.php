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
				<form action="{{ url('/edit-buku/'.$buku->id) }}" method="post">
					@csrf
					<div class="box-body">

						<div class="form-group">
							<label>Id Buku</label>
							<input type='text' class="form-control" name="id_buku" value="B001"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Judul Buku</label>
							<input type="text" name="judul_buku" class="form-control" value="{{ $buku->judul_buku }}" required>
						</div>

						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}" required>
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" required>
						</div>

						<div class="form-group">
							<label>Tahun Terbit</label>
							<input type="text" name="th_terbit" class="form-control" value="{{ $buku->th_terbit }}" required>
						</div>

						<div class="form-group">
							<label>Kategori</label>
							<select name="kategori" class="form-control" required>
								<option value="">Pilih Kategori</option>
								<option value="Fiksi" {{ $buku->kategori == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
								<option value="Nonfiksi" {{ $buku->kategori == 'Nonfiksi' ? 'selected' : '' }}>Nonfiksi</option>
							</select>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-info">Update</button>
						<a href="{{ url('/data-buku') }}" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
