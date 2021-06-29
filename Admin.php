<h2> Tambah User dan Admin </h2>

<br/><br/>

<form method="POST" enctype="multipart/form-data">
<div class="form-group">
        <label> Username  </label>
        <input type="text" class="form-control" name="username">
</div>
<div class="form-group">
        <label> Password  </label>
        <input type="password" class="form-control" name="password">
</div>

<div class="form-group">
        <label> Level </label>
        <input type="text" class="form-control" name="kategori">
</div>
<br/>
<button class="btn btn-primary" name="daftar">simpan</button>
</form>

<?php
  if(isset($_POST["daftar"]))
 {
	$username = $_POST["username"];
    $password = $_POST["password"];
    $kategori = $_POST["kategori"];

    $ambil = $koneksi->query("SELECT * FROM tb_user WHERE username='$username'");
    $cocok = $ambil->num_rows;
    if($cocok==1)
    {

        echo "<script>alert('Pendaftaran gagal, username telah digunkan');</script>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Admin'>";
    }
    else
    {

        $koneksi->query("INSERT INTO tb_user ( username,password,kategori)
        VALUES ('$username','$password','$kategori')");

        echo "<script>alert('Pendaftaran berhasil, silakan login');</script>";
        echo "<script>location='login.php';</script>";

        }                                
    }
?>