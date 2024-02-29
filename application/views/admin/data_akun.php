<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Akun</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Admin</a></li>
						<li class="breadcrumb-item active">Data Akun</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="mt-2 mb-4">
				<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-pengguna">Tambah Pengguna</button>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Pengguna</th>
							<th>Nama Pengguna</th>
							<th>Hak Akses</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Pakai perintah foreach untuk mengulang data -->
						<?php
						$no = 1;
						foreach ($ambil_data_pengguna as $data) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data['id_pengguna'] ?></td>
								<td><?= $data['nm_pengguna'] ?></td>
								<td><?= $data['hak_akses'] ?></td>
								<td><?= $data['status'] ?></td>
								<td>
									<a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalUbahPenggunaAktif_<?= $data['id_pengguna'] ?>">Ubah Status</a>
									<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUbahDataAkun_<?= $data['id_pengguna'] ?>">Ubah Akun</a>
									<a href="#" class="btn btn-sm btn-danger">Hapus Akun</a>
								</td>
							</tr>
						<?php }
						?>
						<!-- End -->
					</tbody>
				</table>
			</div>
		</div>

	</section>

	<div class="modal fade" id="modal-pengguna" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Pengguna</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('tambah_akun') ?>" method="post">
					<div class="modal-body">
						<div class="row mb-2">
							<div class="col-sm-4">
								<label for="nama_pengguna">Nama Pengguna</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Isikan Nama Pengguna">
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-sm-4">
								<label for="password">Password</label>
							</div>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="password" name="password" placeholder="Isikan Password">
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-sm-4">
								<label for="hak-akses">Hak Akses</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="hak_akses" id="hak-akses">
									<option value="1">Administrator</option>
									<option value="2">Pengguna</option>
								</select>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-sm-4">
								<label for="status">Status</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control" name="status" id="status">
									<option value="1">Aktif</option>
									<option value="2">Tidak Aktif</option>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Tambah</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal untuk ubah akun -->
	<?php
	foreach ($ambil_data_pengguna as $data) { ?>
		<div class="modal fade" id="modalUbahDataAkun_<?= $data['id_pengguna'] ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content" role="document">
					<div class="modal-header">
						<h5 class="modal-title">Ubah Keaktifan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form action="<?= base_url('update_data_akun/' . $data['id_pengguna']) ?>" method="post">
						<div class="modal-body">
							<div class="modal-body">
								<div class="row mb-2">
									<div class="col-sm-4">
										<label for="nama_pengguna">Nama Pengguna</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Isikan Nama Pengguna" value="<?= $data['nm_pengguna'] ?>">
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-sm-4">
										<label for="password">Password</label>
									</div>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="password" name="password" placeholder="Isikan Password" value="<?= $data['password'] ?>">
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-sm-4">
										<label for="hak-akses">Hak Akses</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" name="hak_akses" id="hak-akses">
											<option value="1">Administrator</option>
											<option value="2">Pengguna</option>
										</select>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-sm-4">
										<label for="status">Status</label>
									</div>
									<div class="col-sm-8">
										<input class="form-control" name="status" id="status" value="<?= $data['status'] ?>" readonly>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Ubah</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php }
	?>

	<?php
	foreach ($ambil_data_pengguna as $data) { ?>
		<div class="modal fade" id="modalUbahPenggunaAktif_<?= $data['id_pengguna'] ?>" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-center">
				<div class="modal-content" role="document">
					<div class="modal-header">
						<h5 class="modal-title">Ubah Pengguna</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form action="<?= base_url('update_pengguna_aktif/' . $data['id_pengguna']) ?>" method="post">
						<div class="modal-body">
							<div class="modal-body">

								<div class="row mb-2">
									<div class="col-sm-4">
										<label for="status">Status</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" name="status" id="status">
											<option value="1">Aktif</option>
											<option value="2">Tidak Aktif</option>
										</select>
									</div>
								</div>

							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Ubah</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php }
	?>