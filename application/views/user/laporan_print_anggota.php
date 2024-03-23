<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<style type="text/css">
		.table-data {
			width: 100%;
			border-collapse: collapse;
		}

		.table-data tr th,
		.table-data tr td {
			border: 1px solid black;
			font-size: 11pt;
			font-family: Verdana;
			padding: 10px 10px 10px 10px;
		}

		h3 {
			font-family: Verdana;
		}
	</style>
	<h3>
		<center>Laporan Data Anggota Perputakaan Online</center>
	</h3>
	<br />
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Member Sejak</th>
				<th>Role</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($users as $b) {
			?>
				<tr>
					<th scope="row"><?= $no++; ?></th>
					<td><?= $b['nama']; ?></td>
					<td><?= $b['email']; ?></td>
					<td><?= date('d F Y', $b['tanggal_input']) ?></td>
					<td><?= $b['role_name']; ?></td>
					<td><img style="width: 50px;" src="<?= base_url('assets/img/profile/') . $b['image']; ?>" alt="..."></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>