<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_akhir');

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}