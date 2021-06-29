<h2> Data Matakuliah Semester 8 </h2>

            <br/><br/>
            
            

<table class="table table-bordered">
               <thead>
                   <tr>
					   
                       <th>kode matakuliah</th>
					   <th>kode kurikulum</th>
					   <th>nama matakuliah</th>
					   <th>sks</th>
					   <th>prasyarat</th>
                              
                   </tr>
               </thead>
               
               <?php 
                     $ambil = $koneksi->query("SELECT * FROM tb_matkul8");?>
                     <?php while ($data = $ambil->fetch_assoc()) {?>
               <tbody>
                        
                    
                    <td><?php echo $data['kode_matkul']; ?></td>
					<td><?php echo $data['kode_kurikulum']; ?></td>
					<td><?php echo $data['nama_matkul']; ?></td>
					<td><?php echo $data['sks']; ?></td>
					<td><textarea class="form-control"><?php echo $data['syarat']; ?></textarea></td>
                    
                   
               <?php }?>
               </tbody>
           </table>

