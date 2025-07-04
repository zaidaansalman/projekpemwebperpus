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
    @foreach($sirkuls as $no => $sirkul)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $sirkul->id }}</td>
        <td>{{ $sirkul->buku ? $sirkul->buku->judul_buku : '-' }}</td>
        <td>{{ $sirkul->anggota ? $sirkul->anggota->id . ' - ' . $sirkul->anggota->nama : '-' }}</td>
        <td>{{ $sirkul->tgl_pinjam }}</td>
        <td>{{ $sirkul->jatuh_tempo }}</td>
        <td>
            @if($sirkul->denda > 0)
                Rp {{ number_format($sirkul->denda, 0, ',', '.') }}
            @else
                <span class="label label-primary">Masa Peminjaman</span>
            @endif
        </td>
        <td>
            <form action="{{ route('sirkulasi.perpanjang', $sirkul->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success" onclick="return confirm('Perpanjang masa pinjam buku ini 7 hari lagi?')">
                    <i class="glyphicon glyphicon-upload"></i>
                </button>
            </form>
            <form action="{{ route('sirkulasi.kembalikan', $sirkul->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Kembalikan Buku Ini ?')">
                    <i class="glyphicon glyphicon-download"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
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
