<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

    <div class="container" style="margin-top:20px">
        <h2>Edit Data</h2>

        <hr>

        <?php
        //jika sudah mendapatkan parameter GET id dari URL
        if (isset($_GET['id_order'])) {
            //membuat variabel $id untuk menyimpan id dari GET id di URL
            $id_order = $_GET['id_order'];

            //query ke database SELECT tabel mahasiswa berdasarkan id = $id
            $select = mysqli_query($conn, "SELECT * FROM tb_order WHERE id_order'='$id_order''") or die(mysqli_error($conn));

            //jika hasil query = 0 maka muncul pesan error
            if (mysqli_num_rows($select) == 0) {
                echo '<div class="alert alert-warning">id tidak ada dalam database.</div>';
                exit();
                //jika hasil query > 0
            } else {
                //membuat variabel $data dan menyimpan data row dari query
                $data = mysqli_fetch_assoc($select);
            }
        }
        ?>

        <?php
        //jika tombol simpan di tekan/klik
        if (isset($_POST['submit'])) {
            $id_order        = $_POST['id_order'];
            $nama_barang        = $_POST['nama_barang'];
            $ukuran             = $_POST['ukuran'];
            $harga              = $_POST['harga'];
            $stok_barang        = $_POST['stok_barang'];
            $id_kategori        = $_POST['id_kategori'];

            $sql = mysqli_query($conn, "UPDATE tb_order SET status='$status' WHERE id_order='$id_order") or die(mysqli_error($conn));

            if ($sql) {
                echo '<script>alert("Berhasil menyimpan data."); document.location="profil.php?kode_barang=' . $id_order . '";</script>';
            } else {
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>

        <form action="edit.php?kode_barang=<?php echo $kode_barang; ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">KODE BARANG</label>
                <div class="col-sm-10">
                    <input type="hidden" name="id_order" value=<?php echo $_GET['id_order']; ?>></<input>
                    <input type="numeric" name="id_order" class="form-control" value="<?php echo $data['id_order']; ?>" required readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NAMA BARANG </label>
                <div class="col-sm-10">
                    <input type="text" name="status" class="form-control" value="<?php echo $data['status']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="profil.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>