<!-- Begin Page Content -->
<div class="container-fluid">
	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-lg-12">
			<?php if (validation_errors()) { ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php } ?>
			<?= $this->session->flashdata('pesan'); ?>
			<a href="<?= base_url('laporan/cetak_laporan_anggota'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
			<a href="<?= base_url('laporan/laporan_anggota_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
			<a href="<?= base_url('laporan/export_excel_anggota'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
						<th scope="col">Member Sejak</th>
						<th scope="col">Role</th>
						<th scope="col">Image</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$a = 1;
					foreach ($users as $b) { ?>
						<tr>
							<th scope="row"><?= $a++; ?></th>
							<td><?= $b['nama']; ?></td>
							<td><?= $b['email']; ?></td>
							<td><?= date('d F Y', $b['tanggal_input']) ?></td>
							<td><?= $b['role_name']; ?></td>
							<td><img style="width: 50px;" src="<?= base_url('assets/img/profile/') . $b['image']; ?>" alt="..."></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>