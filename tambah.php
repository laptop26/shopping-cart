<?php include('koneksi.php'); ?>

<html>
<head>
    <title>TAMBAH</title>
<!-- navbar -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- end navbar -->
<body>



<!-- menu -->
<div class="container" style="margin-top:20px">
        <h2>Tambah Data</h2>
        
        <hr>
        
        <?php
        if(isset($_POST['submit'])){
            $id_kategori        = $_POST['id_kategori'];
            $nama_kategori      = $_POST['nama_kategori'];
            $harga              = $_POST['harga'];
            $foto               = $_POST['foto'];
            $cabang             = $_POST['cabang'];
           
            
            $cek = mysqli_query($con, "SELECT * FROM tb_kategori WHERE id_kategori='$id_kategori'") or die(mysqli_error($con));
            
            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($con, "INSERT INTO tb_kategori(id_kategori, nama_kategori, harga, foto, cabang) VALUES('$id_kategori', '$nama_kategori', '$harga', '$foto', '$cabang')") or die(mysqli_error($con));
                
                if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="admin.php";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, id_kategori sudah terdaftar.</div>';
            }
        }
        ?>
        
        
        <form action="tambah.php" method="post" class="tes">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID </label>
                <div class="col-sm-10">
                    <input type="numeric" name="id_kategori" class="form-control" size="4" placeholder="ID" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NAMA KETEGORI</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_kategori" class="form-control" size="4" placeholder="Nama kategori" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">HARGA</label>
                <div class="col-sm-10">
                    
                        <input type="numeric" name="harga" class="form-control" size="4" placeholder="Rp."required="required">
                    
                </div>
            </div>
          
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">CABANG</label>
                <div class="col-sm-10">
                    
                        <input type="text" name="cabang" class="form-control" size="4" placeholder="cabang" required="required"> 
                    </div> 
            </div> 
        </div>
             <div class="form-group row">
                <label class="col-sm-2 col-form-label "enctype="multipart/form-data" >FOTO</label>
                <div class="col-sm-10">
                        <input type="file" name="foto" class="form-control" size="4" placeholder="foto" required="required"> 
                        <input type="text" name="foto" class="form-control" size="4" placeholder="foto" required="required"> 
                    </div> 
            </div> 
        </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                </div>
            </div>
        </form>
            </div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- end menu -->
</body>
</html>
