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
				<b>perpusih</b>
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
					<h3 class="box-title">Tambah Peminjaman</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove">
							<i class="fa fa-remove"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{ route('sirkulasi.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						<div class="form-group">
							<label>Id Sirkulasi</label>
							<input type="text" name="id_sk" id="id_sk" class="form-control"
								value="S001" readonly />
						</div>

						<div class="form-group">
							<label>Nama Peminjam</label>
							<select name="id_anggota" id="id_anggota" class="form-control select2" style="width: 100%;">
								<option selected="selected">-- Pilih --</option>
								@if(isset($anggotas))
									@foreach($anggotas as $anggota)
										<option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
									@endforeach
								@endif
							</select>
						</div>

						<div class="form-group">
							<label>Buku</label>
							<select name="id_buku" id="id_buku" class="form-control select2" style="width: 100%;" required>
								<option selected="selected" disabled>-- Pilih --</option>
								@if(isset($bukus))
									@foreach($bukus as $buku)
										<option value="{{ $buku->id }}">{{ $buku->id }} - {{ $buku->judul_buku ?? $buku->judul ?? '' }}</option>
									@endforeach
								@endif
							</select>
						</div>

						<div class="form-group">
							<label>Tgl Pinjam</label>
							<input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Tgl Kembali</label>
							<input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" required readonly />
						</div>
						<script>
						    document.addEventListener('DOMContentLoaded', function() {
						        const tglPinjam = document.getElementById('tgl_pinjam');
						        const tglKembali = document.getElementById('tgl_kembali');
						        tglPinjam.addEventListener('change', function() {
						            if (tglPinjam.value) {
						                const pinjamDate = new Date(tglPinjam.value);
						                pinjamDate.setDate(pinjamDate.getDate() + 7);
						                const yyyy = pinjamDate.getFullYear();
						                const mm = String(pinjamDate.getMonth() + 1).padStart(2, '0');
						                const dd = String(pinjamDate.getDate()).padStart(2, '0');
						                tglKembali.value = `${yyyy}-${mm}-${dd}`;
						            } else {
						                tglKembali.value = '';
						            }
						        });
						    });
						</script>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="data-sirkul" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
