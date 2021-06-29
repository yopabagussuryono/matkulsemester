<h2>Pencapaian Pembelajaran </h2>

<br/><br/>

<form method="POST" enctype="multipart/form-data">

<div class="form-group">
        <label> Pencapaian Pembelajaran </label>
        <textarea class="form-control" name="capaian" rows="10"></textarea>
</div>
<button class="btn btn-primary" name="save1">simpan</button>
</form>
<?php
if (isset($_POST['save1']))
{
      
        $koneksi->query("INSERT INTO tb_cap(pencapaian)
        VALUES ('$_POST[capaian]')");


        echo "<div class='alert alert-info'>Data Tersimpan </div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Visimisi'>";
}
?>