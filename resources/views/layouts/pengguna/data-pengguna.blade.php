@extends('app')
@section('content')
<section class="content-header">
	<h1>
		Pengguna Sistem
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Si Tabsis</b>
			</a>
		</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<a href="add-pengguna" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Email</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $user->name ?? $user->username }}</td>
							<td>{{ $user->username ?? '-' }}</td>
							<td>{{ $user->email ?? '-' }}</td>
							<td>{{ $user->role ?? $user->level ?? '-' }}</td>
							<td>
								<a href="/edit-pengguna/{{ $user->id }}" title="Ubah" class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<form action="/delete-pengguna/{{ $user->id }}" method="POST" style="display:inline;">
									@csrf
									<button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger">
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
