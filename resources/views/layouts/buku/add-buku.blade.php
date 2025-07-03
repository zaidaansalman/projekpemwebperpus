@extends('app')
@section('content')
<section class="content-header">
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
					<h3 class="box-title">Tambah Buku</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{ url('/add-buku') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label>Judul Buku</label>
							<input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Judul Buku"
							 required>
						</div>

						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="pengarang" id="pengarang" class="form-control" placeholder="Nama Pengarang"
							 required>
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Penerbit"
							 required>
						</div>

						<div class="form-group">
							<label>Tahun Terbit</label>
							<input type="text" name="th_terbit" id="th_terbit" class="form-control" placeholder="Tahun Terbit"
							 required>
						</div>

						<div class="form-group">
							<label>Kategori</label>
							<select name="kategori_id" class="form-control" required>
								<option value="">Pilih Kategori</option>
								<option value="Fiksi">Fiksi</option>
								<option value="Nonfiksi">Nonfiksi</option>
								@foreach($kategoris as $kategori)
									<option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label>Cover Buku</label>
							<input type="file" name="cover" class="form-control" accept="image/*">
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="{{ url('/data-buku') }}" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>

@endsection
