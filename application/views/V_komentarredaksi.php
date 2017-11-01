            
    
            <div class="container" >
              <!-- <div class="sb-slidebar sb-left"> -->
    <!-- Your left Slidebar content. -->
    <!-- <aside id="sidebar" class="column"> -->
      <!-- <form class="quick_search"> -->
        <!-- <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;"> -->
      <!-- </form> -->
      <!-- <hr/> -->
      <!-- <h3>MENU</h3> -->
      <!-- <ul class="toggle"> -->
        <!-- <li class="icn_categories"><a href="reader.html">Latar Belakang</a></li> -->
        <!-- <li class="icn_categories"><a href="isi_reader1.html">Identifikasi Masalah</a></li> -->
        <!-- <li class="icn_categories"><a href="isi_reader2.html">Batasan Masalah</a></li> -->
      <!-- </ul> -->
    <!-- </aside> -->
    <!-- end of sidebar -->
  <!-- </div> -->

               <div id="sb-site">


         <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Komentar</h4>
            </div>
        </div>
        <hr>
         <?php $no=1; ?>
    
        <div class="form-group">
            <div class="col-sm-2">
              <label for="inputnama" class="control-label" style="margin-top: 7px;">
                <a href=" <?php echo site_url('web/penulis') ?>"class="glyphicon glyphicon-dashboard" style="right: 5px;"></a> Dasboard
              </label>
              
            </div>

            <div class="col-sm-10">
              <table class="table">
              <col width="30">
              <col width="250"> 
              <col width="250"> 
              <thead>
              
                <tr>
                

                <label> <?php $id = $this->uri->segment(3);
                $query2 = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                echo $query2->judul_artikel;
                ?></label>
                
                <th>NO</th><th>PESAN</th><th>NAMA</th><th>TANGGAL</th><th>AKSI</th></tr>
              </thead> 
                  <?php foreach ($query as $key ) { ?>
                    
                  
                  <tbody> 
                   <tr> 
                   <td><?php echo $no ?></td> 
                   <td> <?php echo $key['isi_komentar']; ?></td>
                    <td><?php echo $key['nama'] ;?></td>
                    <td><?php echo $key['tanggal']; ?></td>
                    <td></td>
                     </tr> 

                     
                     <?php $no++; ?>
      
                      </tbody>
                      <?php }?> 
                      </table>
              </div>
      </div>
  </div>


      </div>