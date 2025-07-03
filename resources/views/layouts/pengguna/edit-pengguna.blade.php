@extends('app')
@section('content')
<style>
    .box-info {
        background: #f4f9fd !important;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(44, 62, 80, 0.07);
    }
    .box-info .box-header.with-border {
        border-bottom: 1px solid #b3d8f6;
    }
</style>
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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Pengguna</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="{{ url('/edit-pengguna/' . $user->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label>Email</label>
							<input class="form-control" name="email" value="{{ old('email', $user->email) }}" required />
						</div>

						<div class="form-group">
							<label>Nama Pengguna</label>
							<input class="form-control" name="name" value="{{ old('name', $user->name) }}" />
						</div>

						<div class="form-group">
							<label>Username</label>
							<input class="form-control" name="username" value="{{ old('username', $user->username) }}" />
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" id="pass" placeholder="Isi jika ingin mengubah password" />
							<input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
						</div>

						<div class="form-group">
							<label>Level</label>
							<select name="role" id="level" class="form-control" required>
								<option value="">-- Pilih Level --</option>
								<option value='Administrator' {{ $user->role == 'Administrator' ? 'selected' : '' }}>Administrator</option>
								<option value='Petugas' {{ $user->role == 'Petugas' ? 'selected' : '' }}>Petugas</option>
							</select>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-info">
						<a href="{{ url('/data-pengguna') }}" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
@endsection
