<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
?>
<ul class="nav nav-pills">
	<li class="nav-item">
		<a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
	</li>
	
</ul>
<form action="" method="get">
	<br>
	&nbsp&nbsp<input type="text" name="cari">
	<input type="submit" value="Cari">
	<form action="" method="get">
		<br>

	</form>

	<?php
	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
		echo "<b>&nbsp Hasil Pencarian : " . $cari . "</b>";
	}
	?>
	<center>
		<h2>Data Transaksi Warung Sayuran<h2>
	</center>


	<?php
	require_once 'koneksi.php';
	require_once 'header.php';
	?>

	<div class="container mt-5">



		<table class="table table-bordered mt-3">
			<thead align="center">
				<tr>
					<th>#</th>
					<th>Tgl. Transaksi</th>
					<th>Total Item</th>
					<th>Total Bayar</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">

				<?php
				$query = mysqli_query($conn, "SELECT * FROM tb_order");
				$no = 1;
				while ($dt = $query->fetch_assoc()) :
				?>

					<tr>
						<td><?= $no++; ?></td>
						<td><?= $dt['tgl_transaksi']; ?></td>
						<td><?= $dt['total_item']; ?></td>
						<td><?= $dt['total_bayar']; ?></td>
						<td>
							<a href="status.php?id_order=<?= $dt['id_order']; ?>">Detail Order</a> ||
							<a href="delet_transaksi.php?id_order=<?= $dt['id_order']; ?>">Delete</a>
						</td>
					</tr>

				<?php endwhile; ?>

			</tbody>
		</table>
	</div>

	<?php require_once 'footer.php'; ?>
	</table>
	</body>

	</html>