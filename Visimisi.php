<h2> Visi dan Misi </h2>

<br/><br/>

<form method="POST" enctype="multipart/form-data">

<div class="form-group">
        <label> Visi </label>
        <textarea class="form-control" name="visi" rows="10"></textarea>
</div>

<div class="form-group">
        <label> Misi </label>
        <textarea class="form-control" name="misi" rows="10"></textarea>
</div>
<button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
      
        $koneksi->query("INSERT INTO tb_visi(visi)
        VALUES ('$_POST[visi]')");

        $koneksi->query("INSERT INTO tb_misi(misi)
        VALUES ('$_POST[misi]')");

        echo "<div class='alert alert-info'>Data Tersimpan </div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Visimisi'>";
}
?>


<br/><br/>

<form method="POST" enctype="multipart/form-data">

<div class="form-group">
        <label> Visi </label>
        <textarea class="form-control" name="visi1" rows="10"></textarea>
</div>
<button class="btn btn-primary" name="save1">simpan</button>
</form>
<?php
if (isset($_POST['save1']))
{
      
        $koneksi->query("INSERT INTO tb_visi(visi)
        VALUES ('$_POST[visi1]')");


        echo "<div class='alert alert-info'>Data Tersimpan </div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Visimisi'>";
}
?>

<br/><br/>

<form method="POST" enctype="multipart/form-data">

<div class="form-group">
        <label> Misi </label>
        <textarea class="form-control" name="misi1" rows="10"></textarea>
</div>
<button class="btn btn-primary" name="save2">simpan</button>
</form>

<?php
if (isset($_POST['save2']))
{
      
        $koneksi->query("INSERT INTO tb_misi(misi)
        VALUES ('$_POST[misi1]')");


        echo "<div class='alert alert-info'>Data Tersimpan </div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=Visimisi'>";
}
?>

