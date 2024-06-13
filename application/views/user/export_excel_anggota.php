<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
	<center>Laporan Data Anggota Perpustakaan Online</center>
</h3>
<br>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Member Sejak</th>
			<th>Role</th>
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
			</tr>
		<?php } ?>
	</tbody>
</table>
