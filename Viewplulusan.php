<table class="table table-bordered">
               <thead>
                   <tr>
					   <th>no</th>
                       <th>Profil Lulusan</th>
                       <th>Keterangan Profil Lulusan</th>
                              
                   </tr>
               </thead>
               <?php $nomor=1;?>
               <?php 
                     $ambil = $koneksi->query("SELECT * FROM tb_plulusan");?>
                     <?php while ($data = $ambil->fetch_assoc()) {?>
               <tbody>
                        
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $data['plulusan']; ?></td>
                    <td><textarea class="form-control"><?php echo $data['ket_plulusan']; ?></textarea></td>
                    
                    <?php $nomor++; ?>
               <?php }?>
               </tbody>
           </table>
		   