            
    
            <div class="container" >

               <div id="sb-site">


         <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Penulis Baru</h4>
            </div>
        </div>
        <hr>
        <?php $no=1; ?>
        <div class="form-group">
            <div class="col-sm-2">
              <label for="inputnama" class="control-label" style="margin-top: 7px;">
                <a href=" <?php echo site_url('web/redaksi') ?>"class="glyphicon glyphicon-dashboard" style="right: 5px;"></a>Dashboard
              </label>
            </div>

            <div class="col-sm-10">
              <table class="table">
              <col width="30">
              <col width="200"> 
              <thead>
                <tr>
                <th>NO</th> <th>NAMA</th> <th>EMAIL</th> <th>ALAMAT</th><th>AKSI</th></tr>
              </thead> 
                <?php foreach ($penulisbaru as $key ) { ?>
                  <tbody> 
                   <tr> <th scope="row"><?php echo $no ?></th> 
                   <td><?php echo $key['nama_user'];?></td> 
                   <td><?php echo $key['email']; ?></td>
                    <td><?php echo $key['alamat']; ?></td>
                    <td>

                    <a href="<?php echo site_url('web/hapuspenulis').'/'.$key['id_user']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="<?php echo site_url('web/aktifkanuser').'/'.$key['id_user'];?>"><span class="glyphicon glyphicon-ok-circle"></span></a>
                       
                    </td>
                     </tr> 

                     <?php $no++; ?>
                     <?php } ?>
                     
                      </tbody> 
                      </table>
              </div>
      </div>
  </div>


      </div>