<h2> Profil Lulusan </h2>

<br/><br/>

<form method="POST" enctype="multipart/form-data">

<div class="form-group">
        <label> Profil lulusan </label>
        <input type="text" class="form-control" name="jplulusan">
</div>

<div class="form-group">
        <label> Keterangan </label>
        <textarea class="form-control" name="plulusan" rows="10"></textarea>
</div>
<button class="btn btn-primary" name="save1">simpan</button>
</form>
<?php
if (isset($_POST['save1']))
{
      
        $koneksi->query("INSERT INTO tb_plulusan(plulusan,ket_plulusan)
        VALUES ('$_POST[jplulusan]','$_POST[plulusan]')");


        echo "<div class='alert alert-info'>Data Tersimpan </div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Visimisi'>";
}
?>