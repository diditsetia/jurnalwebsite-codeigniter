
            <div class="container" >
           <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Folder Save</h4>
            </div>
        </div>
        <hr>
        <?php $no= $this->uri->segment('3') + 1; ?>
        <div class="form-group">
            <div class="col-sm-2">
              <label for="inputnama" class="control-label" style="margin-top: 7px;">
                <a href=" <?php echo site_url('web/penulis') ?>"class="glyphicon glyphicon-file" style="right: 5px;"></a> Artikel Baru <br>
                <a href=" <?php echo site_url('web/foldersave') ?>"class="glyphicon glyphicon-folder-close" style="right: 5px; margin-top: 10px;"></a> Folder Save
              </label>

            </div>
            <div class="col-sm-10">
              <table class="table">
              <col width="30">
              <col width="250"> 
              <thead>
                <tr>
                <th>NO</th><th>NAMA</th> <th>TANGGAL</th><th>STATUS</th><th>AKSI</th></tr>
              </thead> 
                <?php foreach ($datasave as $key ) { ?>
                  <tbody> 
                   <tr> <th scope="row"><?php echo $no ?></th> 
                   <td><?php echo $key['namasave'];?></td> 
                   <td><?php echo $key['create_at'];?></td>
                   <td><?php echo $key['status']; ?></td>
                    <td>

                    <?php if (  $key['status'] == 'draf' && $key['kolom'] ==  '1' ) { ?>
                      <a href="<?php echo site_url('web/hapusartikelpenulis').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="<?php echo site_url('web/editdraf').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                    <?php } elseif ($key['status'] == 'final' && $key['kolom'] == '1' ) { ?>
                      
                       <a href="<?php echo site_url('web/hapusartikelpenulis').'/'.$key['id_artikel']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="<?php echo site_url('pratinjau/juduljurnal1').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="<?php echo site_url('web/editdraf').'/'.$key['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span></a>
                    <?php } ?>
                    
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