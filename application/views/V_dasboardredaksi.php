            
    
            <div class="container" >

               <div id="sb-site">


         <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Dasboard Redaksi</h4>
            </div>
        </div>
        <hr>
        <?php $no=$this->uri->segment('3') + 1; ?>
        <div class="form-group">
            <div class="col-sm-2">
             
              <label for="inputnama" class="control-label" style="margin-top: 7px;">
              <a href=" <?php echo site_url('web/penulisbaru') ?>"class="glyphicon glyphicon-user" style="right: 5px;"></a>Penulis Baru
              </label>
            </div>

            <div class="col-sm-10">
              <table class="table">
              <col width="30">
              <col width="550"> 
              <thead>
                <tr>
                <th>NO</th> <th>JUDUL</th> <th>STATUS</th> <th>PENULIS</th><th>AKSI</th></tr>
              </thead> 
                <?php foreach ($dataartikel as $key ) { ?>
                  <tbody> 
                   <tr> <th scope="row"><?php echo $no ?></th> 
                   <td><?php echo $key['judul_artikel'];?></td> 
                   <td><?php echo $key['status']; ?></td>
                    <td><?php echo $key['nama_penulis']; ?></td>
                    <td>

                    <?php if (  $key['status'] == 'Waiting' && $key['kolom'] == '1'  ) { ?>

                      <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                       <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                       
                    <?php }elseif ($key['status'] == 'Waiting' && $key['kolom'] == '2' ) { ?>

                      <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/pratinjau').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                       <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                      
                    <?php }elseif ($key['status'] == 'drafredaksi' && $key['kolom'] == '1') { ?>
                    <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                       <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>   

                    <?php } elseif ($key['status'] == 'drafredaksi' && $key['kolom'] == '2') { ?>
                       <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/pratinjau').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                       <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                    <?php } elseif ($key['status'] == 'post' && $key['kolom'] == '1') { ?>
                    
                     <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('baca/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                       <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="<?php echo site_url('web/tampilkomentar').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-comment"></span></a>

                       
                            
                   <?php } elseif ($key['status'] == 'post' && $key['kolom'] == '2') { ?>
                         <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('baca/baca2').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                       <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="<?php echo site_url('web/tampilkomentar').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-comment"></span></a>
                     
                  <?php }

                     else { ?> 

                        <a href="<?php echo site_url('web/editjurnal').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <?php } ?>
                        
              
                    </td>
                     </tr> 

                     <?php $no++; ?>
                     <?php } ?>
                     
                      </tbody> 
                      </table>
                      <br/>
                      <?php 
                      echo $this->pagination->create_links();
                        ?>
              </div>
      </div>
  </div>


      </div>