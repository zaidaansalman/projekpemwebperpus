@extends('app')
@section('content')
<section class="content-header">
	<h1 style="text-align:center;">
		Data Buku
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="/dashboard">
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
			<a href="add-buku" title="Tambah Data" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Buku</th>
							<th>Judul Buku</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun</th>
							<th>Nama Kategori</th>
							<th>Cover</th>
							<th>Kelola</th>
						</tr>
					</thead>
					<tbody>
    @foreach($bukus as $no => $buku)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $buku->id }}</td>
        <td>{{ $buku->judul_buku }}</td>
        <td>{{ $buku->pengarang }}</td>
        <td>{{ $buku->penerbit }}</td>
        <td>{{ $buku->th_terbit }}</td>
        <td>{{ $buku->kategori ? $buku->kategori->nama_kategori : '-' }}</td>
        <td>
            @if($buku->cover)
                <img src="{{ asset('storage/covers/'.$buku->cover) }}" alt="cover" width="60">
            @else
                -
            @endif
        </td>
        <td>
            <a href="{{ url('/edit-buku/'.$buku->id) }}" title="Ubah" class="btn btn-success">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <form action="{{ url('/delete-buku/'.$buku->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data Ini ?')">
                    <i class="glyphicon glyphicon-trash"></i>
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
</section>
@endsection
