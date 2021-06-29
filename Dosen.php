<h2> Tambah Data Dosen </h2>

<br/><br/>

<form method="POST" enctype="multipart/form-data">
<div class="form-group">
        <label> NIK  </label>
        <input type="number" class="form-control" name="nik">
</div>
<div class="form-group">
        <label> Nama  </label>
        <input type="text" class="form-control" name="nama">
</div>

<div class="form-group">
        <label> Jurusan  </label>
        <input type="text" class="form-control" name="jurusan">
</div>

<div class="form-group">
        <label> foto </label>
        <input type="file" class="form-control" name="foto">
</div>
<div class="form-group">
        <label> email </label>
        <input type="text" class="form-control" name="email">
</div>
<button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
        $nama = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi,"../images/".$nama);
        $koneksi->query("INSERT INTO tb_dosen(nik,nama,jurusan,gambar,email)
		VALUES ('$_POST[nik]','$_POST[nama]','$_POST[jurusan]','$nama','$_POST[email]')");

        echo "<div class='alert alert-info'>Data Tersimpan </div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Dosen'>";
}
?>