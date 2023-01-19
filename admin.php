<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
?>
<html>

<head>
	<title>ADMIN | WARUNG SAYURAN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar navbar-fixed-top navbar-inverse inverse">



					<ul class="nav navbar-nav navbar-right" style="margin-right: 50px;">
						<li>
							<a href="logout.php" onclick="return confirm('Yakin akan keluar dari aplikasi ini ?')">
								<div class="glyphicon glyphicon-log-out"></div>&nbsp;
								<strong>KELUAR</strong>
							</a>
					</ul>
					</li>
					<ul class="nav navbar-nav navbar-right" style="margin-right: -10px;">
						<li>
							<a href="profil.php">
								<div class="glyphicon glyphicon-cog"></div>&nbsp;
								<strong>Transaksi</strong>
							</a>
						</li>
						<li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<a href="tambah_admin.php">&nbsp;
		<div class="btn btn-info">Tambah Data</div></a>
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
			<h2>Data Warung Sayuran<h2>
		</center>

		<br>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead style="background: #5F9EA0">
					<th>
						<center>Kode Barang</center>
					</th>
					<th>
						<center>Tanggal</center>
					</th>
					<th>
						<center>Nama Barang</center>
					</th>
					<th>
						<center>Stock</center>
					</th>
					<th>
						<center>Total Harga</center>
					</th>
					<th>
						<center>Aksi</center>
						</>
				</thead>
		</div>
		<?php
		if (isset($_GET['cari'])) {
			$cari = $_GET['cari'];
			$result = mysqli_query($conn, "SELECT * FROM tb_produk WHERE nama_barang LIKE '%" . $cari . "%'");
		} else {
			$result = mysqli_query($conn, "SELECT * FROM tb_produk");
		}
		while ($data = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $data['id'] . "</td>";
			echo "<td>" . $data['tanggal'] . "</td>";
			echo "<td>" . $data['nama_barang'] . "</td>";
			echo "<td>" . $data['stok'] . "</td>";
			echo "<td>" . $data['harga'] . "</td>";

			echo "<td><a href='edit2.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
		}
		?>
		</table>
</body>

</html>