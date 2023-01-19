<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil Keluar dari Sistem');window.location='index.php';</script>";
?>