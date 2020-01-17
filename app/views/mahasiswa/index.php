<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
				Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL;  ?>/mahasiswa/cari" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			<ul>
				<?php foreach ($data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama'];  ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'];  ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];  ?>" class="badge badge-primary float-right ml-1">detail</a>

					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>


</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
					<div class="form-group">
						<input type="hidden" name="id" id="id">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" required>
					</div>

					<div class="form-group">
						<label for="nrp">NRP</label>
						<input type="number" class="form-control" id="nrp" name="nrp" required>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="S1 Informatika">S1 Informatika</option>
							<option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
							<option value="D3 RPL">D3 RPL</option>
							<option value="S1 RPL">S1 RPL</option>
							<option value="D4 Telekomunikasi">D4 Telekomunikasi</option>
						</select>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
</div>