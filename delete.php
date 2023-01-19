<?php
// include database connection file
include_once("koneksi.php");
// Get id from URL to delete that user
$id = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM tb_produk WHERE id='$id'");
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script>alert('Berhasil Dihapus');window.location='admin.php';</script>";
