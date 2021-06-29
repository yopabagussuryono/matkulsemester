<h2> Data Dosen </h2>

			<br/><br/>

<table class="table table-bordered">
               <thead>
                   <tr>
					   <th>No</th>
                       <th>Foto</th>
					   <th>Data Bio</th>
                              
                   </tr>
               </thead>
               <?php $nomor=1;?>
               <?php 
                     $ambil = $koneksi->query("SELECT * FROM tb_dosen");?>
                     <?php while ($data = $ambil->fetch_assoc()) {?>
               <tbody>
                        
                    <td><?php echo $nomor; ?></td>
                    <td><img src="../images/<?php echo $data['gambar']; ?>" width="100"></td>
                    <td> 
                    NIK        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $data['nik']; ?><br/>
					Nama       &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $data['nama']; ?><br/>
					Jurusan    &nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $data['jurusan']; ?><br/>
					Email      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $data['email']; ?></td>
                    
                    <?php $nomor++; ?>
               <?php }?>
               </tbody>
           </table>
		   