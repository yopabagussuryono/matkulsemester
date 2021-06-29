<h2> Visi dan Misi </h2>

<br/><br/>

<table class="table table-bordered">
               <thead>
                   <tr>
					   <th>no</th>
                       <th>visi</th>
                              
                   </tr>
               </thead>
               <?php $nomor=1;?>
               <?php 
                     $ambil = $koneksi->query("SELECT * FROM tb_visi");?>
                     <?php while ($data = $ambil->fetch_assoc()) {?>
               <tbody>
                        
                    <td><?php echo $nomor; ?></td>
                    <td><textarea class="form-control"><?php echo $data['visi']; ?></textarea></td>
                    
                    <?php $nomor++; ?>
               <?php }?>
               </tbody>
           </table>
		   
		   <br/><br/>

<table class="table table-bordered">
               <thead>
                   <tr>
					   <th>no</th>
                       <th>misi</th>
                              
                   </tr>
               </thead>
               <?php $nomor=1;?>
               <?php 
                     $ambil = $koneksi->query("SELECT * FROM tb_misi");?>
                     <?php while ($data = $ambil->fetch_assoc()) {?>
               <tbody>
                        
                    <td><?php echo $nomor; ?></td>
                    <td><textarea class="form-control"><?php echo $data['misi']; ?></textarea></td>
                    
                    <?php $nomor++; ?>
               <?php }?>
               </tbody>
           </table>
		   
		   
		   <br/><br/>