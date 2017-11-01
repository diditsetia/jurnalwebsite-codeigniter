
            <div class="container" >
           <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Dasboard Penulis</h4>
            </div>
        </div>
        <hr>
        <?php $no= $this->uri->segment('3') + 1; ?>
        <div class="form-group">
            <div class="col-sm-2">
              <label for="inputnama" class="control-label" style="margin-top: 7px;">
                <a href=" <?php echo site_url('web/penulis') ?>"class="glyphicon glyphicon-file" style="right: 5px;"></a> Artikel Baru <br>
                <a href=" <?php echo site_url('web/foldersave') ?>"class="glyphicon glyphicon-folder-close" style="right: 5px; margin-top: 10px;"></a> Folder Save <br>
                <a href=" <?php echo site_url('web/folderreview') ?>"class="glyphicon glyphicon-hourglass" style="right: 5px; margin-top: 10px;"></a> Waiting Review<br>
                <a href=" <?php echo site_url('web/folderrevisi') ?>"class="glyphicon glyphicon-edit" style="right: 5px; margin-top: 10px;"></a> Folder Revisi <br>
                <a href=" <?php echo site_url('web/finalrevisi') ?>"class="glyphicon glyphicon-folder-close" style="right: 5px; margin-top: 10px;"></a> Final Revisi

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
                <?php foreach ($data as $key ) { ?>
                  <tbody> 
                   <tr> <th scope="row"><?php echo $no ?></th> 
                   <td><?php echo $key['judul_artikel'];?></td> 
                   <td><?php echo $key['status']; ?></td>
                    <td><?php echo $key['nama_penulis']; ?></td>
                    <td>

                    <?php if (  $key['status'] == 'Waiting' && $key['kolom'] ==  '1' ) { ?>

                      <a href="<?php echo site_url('pratinjau/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <?php } elseif ( $key['status'] == 'Waiting' && $key['kolom'] == '2' ) { ?>

                     <a href="<?php echo site_url('pratinjau/pratinjau').'/'.$key['id_artikel']; ?>" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="<?php echo site_url('web/hapusartikelpenulis').'/'.$key['id_artikel']; ?>"   ><span class="glyphicon glyphicon-trash"></span></a>
                    <?php }elseif ($key['status'] == 'draf' && $key['kolom'] == '1') { ?>
                      
                      <a href="<?php echo site_url('web/hapusartikelpenulis').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="<?php echo site_url('web/editdraf').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                       

                    <?php }elseif ($key['status'] == 'draf' && $key['kolom'] == '2') { ?>
                      <a href="<?php echo site_url('web/hapusartikelpenulis').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/pratinjau').'/'.$key['id_artikel']; ?>" target="_blank" ><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="<?php echo site_url('web/editdraf').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                    
                    <?php }
                    elseif ($key['status'] == 'post' && $key['kolom'] == '1') { ?>
                    <a href="<?php echo site_url('baca/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>  
                    <?php }elseif ($key['status'] == 'post' && $key['kolom'] == '2') { ?>
                      <a href="<?php echo site_url('baca/baca2').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                   <?php  } ?>
                    
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