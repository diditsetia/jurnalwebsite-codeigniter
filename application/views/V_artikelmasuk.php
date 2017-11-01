<div class="container" >
           <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Artikel Masuk</h4>
            </div>
        </div>
        <hr>
        <?php $no= $this->uri->segment('3') + 1; ?>
        <div class="form-group">
            <div class="col-sm-2">
              <label for="inputnama" class="control-label" style="margin-top: px;">
                <a href=" <?php echo site_url('web/artikelmasuk') ?>"class="glyphicon glyphicon-folder-close" style="right: 5px; margin-top: 10px;"></a> Artikel Masuk <br>
              </label>

            </div>
            <div class="col-sm-10">
              <table class="table">
              <col width="30">
              <col width="450"> 
              <thead>
                <tr>
                <th>NO</th><th>JUDUL</th> <th>STATUS</th><th>PENULIS</th><th>AKSI</th></tr>
              </thead> 
                <?php foreach ($datareview as $key ) { ?>
                  <tbody> 
                   <tr> <th scope="row"><?php echo $no ?></th> 
                   <td><?php echo $key['judul_artikel'];?></td> 
                   <td><?php echo $key['status'];?></td>
                   <td><?php echo $key['nama_penulis']; ?></td>
                    <td>

                    <?php if (  $key['status'] == 'waitingriview' && $key['kolom'] ==  '1' ) { ?>
                     
                     <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                     <a href="<?php echo site_url('review/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <?php if( $key['uraianperbaikan'] != NULL) { ?>
                       <a href="<?php echo site_url('web/kirimpenulis').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-level-up"></span></a>
                      <?php } ?>
                    <?php }elseif ($key['status'] == 'waitingfinal' && $key['kolom'] == '1') { ?>
                       <a href="<?php echo site_url('web/hapus').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                     <a href="<?php echo site_url('review/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <?php if( $key['uraianperbaikan'] != NULL) { ?>
                       <a href="<?php echo site_url('web/kirimpenulis').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-level-up"></span></a>
                      <?php } ?>
                    <?php }  ?>
                    
                    </td>
                     </tr> 

                     <?php $no++; ?>
                     <?php } ?>
                     
                      </tbody> 
                      </table>
                      <br/>
                      
              </div>
      </div>
      </div>