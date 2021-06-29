<h2> Tambah Kurikulum Semester 3 </h2>


		    
<script src="assets/js/dinamic.js"></script>  
           <script src="assets/js/dinamic.min.js"></script>

<br/><br/>

<form method="POST" enctype="multipart/form-data" >
<div class="form-group">
        <label> Kode Matakuliah </label>
        <input type="text" class="form-control" name="kode">
</div>

<div class="form-group">
        <label> Kode Kurikulum </label>
        <input type="text" class="form-control" name="kodek">
</div>

<div class="form-group">
        <label> Nama Matakuliah </label>
        <input type="text" class="form-control" name="nama">
</div>

<div class="form-group">
        <label> Sks </label>
        <input type="number" class="form-control" name="sks">
</div>

<label> Syarat </label>

<div class="form-group">  
    <form name="add_name" id="add_name">  
        <div class="table-responsive">  
             <table class="table table-bordered" id="dynamic_field">  
               <tr>  
                  <td><input type="text" name="syarat[]"  class="form-control name_list" /></td>  
                  <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
               </tr>  
            </table>    
        </div>  
    </form>  

<br/><br/>
<button class="btn btn-primary" name="save">simpan</button> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="index.php?halaman=Kurikulum" class="btn btn-warning"> Kembali </a>
</form>

<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="syarat[]"  class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"config.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
<?php
  if(isset($_POST["save"]))
 {
	$kode = $_POST["kode"];
	$kodek = $_POST["kodek"];
     $nama = $_POST["nama"];
     $sks = $_POST["sks"];
	$syarat = $_POST["syarat"];
     $sys   = implode(',', $syarat);

    $ambil = $koneksi->query("SELECT * FROM tb_matkul WHERE kode_matkul='$kode'");
    $cocok = $ambil->num_rows;
    if($cocok==1)
    {

        echo "<script>alert('Pendaftaran matakuliah gagal, kode telah digunkan');</script>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=semester1'>";
    }
    else
    {

        $koneksi->query("INSERT INTO tb_matkul ( kode_matkul, kode_kurikulum, nama_matkul, sks, syarat)
        VALUES ('$kode','$kodek','$nama','$sks','$sys')");

        echo "<script>alert('Pendaftaran matakuliah berhasil');</script>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=semester1'>";

        }                                
    }
?>