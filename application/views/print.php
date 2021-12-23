<body>
	<table>
		<tr>
			<td>No</td>
			<td>Username</td>
			<td>Email</td>
			<td>Jenis Kelamin</td>
			<td>Agama</td>
			<td>Tanggal Lahir</td>
			<td>Posisi</td>
		</tr>
		<?php
		$count = 1;
		foreach ($user as $item) : ?>

			<tr>
				<td><?php echo $count++ ?></td>
				<td><?php echo $item->username ?></td>
				<td><?php echo $item->email ?></td>
				<td><?php echo $item->jenis_kelamin ?></td>
				<td><?php echo $item->agama ?></td>
				<td><?php echo $item->tgl_lahir ?></td>
				<td><?php echo $item->role ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>