<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html>
<head>
    <title>FORM DAFTAR</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <!-- judul aplikasi -->
                        <div class="panel-heading">
                            <div style="margin-top: 5px;margin-bottom: 100px;"></div>
                            <div style="margin-left: 60px; margin-top: -90px; font-size: 120%;">
                                A P L I K A S I &nbsp; P E R P U S T A K A A N &nbsp; O N L I N E
                            </div>
                            <div style="margin-left: 180px; font-size: 200%; margin-top: 10px;">
                                <strong>Form Login</strong>
                            </div>
                        </div>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form method="post" action='daftar_admin.php'>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="Masukan email Anda..." required maxlength="30">
                                    </div>                                  
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama Anda..." required maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Masukan password Anda..." required maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="daftar" class="btn btn-success btn-lg" value="Daftar">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end isi -->
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php
  // include database connection file
 include_once("koneksi.php");
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['daftar'])) {
 $email = $_POST['email'];
 $nama = $_POST['nama'];
 $password = md5($_POST['password']);
 

 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO admin (email,password,nama) VALUES('$email','$password','$nama')");
 // Show message when user added
 if($result== null){
    echo "<script>alert('Data Salah/Data Kosong !!!');window.location='daftar_admin.php';</script>";
 }else{
 echo "<script>alert('Berhasil Mendaftar');window.location='index.php';</script>";
 } 
 }
 ?>
</body>
</html>