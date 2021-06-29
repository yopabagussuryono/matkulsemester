<table class="table table-bordered">
               <thead>
                   <tr>
					   <th>no</th>
                       <th>Pencapaian Pembelajaran</th>
                              
                   </tr>
               </thead>
               <?php $nomor=1;?>
               <?php 
                     $ambil = $koneksi->query("SELECT * FROM tb_cap");?>
                     <?php while ($data = $ambil->fetch_assoc()) {?>
               <tbody>
                        
                    <td><?php echo $nomor; ?></td>
                    <td><textarea class="form-control"><?php echo $data['pencapaian']; ?></textarea></td>
                    
                    <?php $nomor++; ?>
               <?php }?>
               </tbody>
           </table>
