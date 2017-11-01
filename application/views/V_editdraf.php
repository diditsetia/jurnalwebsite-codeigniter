 <div class="container" >

        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Menulis Artikel Jurnal</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <?php foreach ($dataeditjurnal as $key ) { ?>
      
        <form  enctype='multipart/form-data' class="form-horizontal" action="<?php echo site_url('Updatejurnal/update'); ?>" method="post">

         <div class="form-group ">
         <div  class="col-sm-2 ">
                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalpratinjau">pratinjau</button> -->
              <button type="submit" name="submit" value="pratinjauone" class="btn btn-info" style="width:100%">pratinjau</button>
        </div>
        <?php if ($key->status == 'final') { ?>
          <div class="col-sm-1">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalsend">send</button>
        </div>
        <?php } ?>

         
        <div class="col-sm-1">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalsave">save</button>
        </div>

      <div class="col-sm-1">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalcancel">cancel</button>
        </div>
    </div>  

      
  <!-- Tombol untuk menampilkan modal-->
 
<!-- Modal pratinjau -->
  <!-- <div id="myModalpratinjau" class="modal fade" role="dialog"> -->
    <div id="mdlModal" class="modal-dialog" style="<?php if($this->session->userdata('active') == 'true'){ echo "display:block"; } else { echo "display:none"; } ?>">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button onclick="hiddenBtn()" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">FORMAT KOLOM</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>pilih format kolom yang ingin di pratinjau? </p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-6">
        
        <a href="<?php echo site_url('pratinjaunodb/judul1')  ?>" target="_blank" class="btn btn-info" style="width:100%" >1 kolom</a>
      </div>
        <div class="col-sm-6">
         <a href="<?php echo site_url('pratinjaunodb/pratinjau')  ?>" target="_blank" class="btn btn-info" style="width:100%" >2 kolom</a>
        
      </div>
        </div>
      </div>
    </div>
  <!-- </div> -->
  <script type="text/javascript">
  function hiddenBtn()
  {
    $('#mdlModal').hide();
  }
  </script>

  <!-- Modal send -->
   <div id="myModalsend" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>apakah anda yakin send artikel ini ?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-2">
        <button type="submit" name="submit" value="sendriview" class="btn btn-info" style="width:100%">Send</button>
      </div>
        <!--<div class="col-sm-6">
        <button type="submit" name="submit" value="sendupdate2" class="btn btn-info" style="width:100%">2 kolom</button>
      </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal save -->
 <div id="myModalsave" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">save</h4>
        </div>
        <!-- body modal -->
        <?php $idartikel = $this->uri->segment(3) ?>
         <?php $querysave = $this->db->get_where('artikel',array('id_artikel'=>$idartikel))->row(); ?>
        <div class="modal-body">
          <p>Nama File</p>
           <input type="text" class="form-control" name="namafile" placeholder="nama file" 
           value="<?php echo $querysave->namasave ;?>">
           <p style=" margin-top: 10px;">Status</p>
          <?php if ($querysave->status == 'draf') { ?>
            <div class="radio">
           <label>
           <input type="radio" name="status"  value="draf" checked >
            draf
            </label>
            <label>
             <input type="radio" name="status" value="final">
             final
            </label>
            </div>
          <?php }elseif ($querysave->status =='final') { ?>
             <div class="radio">
           <label>
           <input type="radio" name="status"  value="draf" >
            draf
            </label>
            <label>
             <input type="radio" name="status" value="final" checked >
             final
            </label>
            </div>
          <?php } ?>
          
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <div >
        <button type="submit" name="submit" value="saveupdatedraf1" class="btn btn-info" style="width:20%"> Save</button>
        <button type="submit" name="submit" value="saveupdatedraf2" class="btn btn-info" style="width:20%"> Save as</button>
      </div>
    
        </div>

      </div>
    </div>
  </div>

  <!-- Modal cancel -->
  <div id="myModalcancel" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p> apakah anda yakin ingin menutup halaman ini ?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-3">
        <button type="submit" name="submit" value="cancel" class="btn btn-info" style="width:100%">Tutup</button>
      </div>
        </div>
      </div>
    </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $key->id_artikel?>">
              <input type="hidden" class="form-control" name="iduser" value="<?php echo $this->session->userdata('id'); ?>" placeholder="iduser">
                 
              

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kolom</label>
              <div class="col-sm-1">
               <input type="text" class="form-control" name="kolom"  
               value=" <?php echo $key->kolom ; ?>">
              </div>
            </div>

               <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorjudul" name="judul"  >
              <?php echo ( $this->session->userdata('judul') == '') ?  $key->judul_artikel :  $this->session->userdata('judul'); ?>
              </textarea>
              </div>
            </div>

              <div class="form-group">
              <label for="inputnama" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Penulis
              </label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="namapenulis"  
               value=" <?php echo ($this->session->userdata('namapenulis') == '') ? $key->nama_penulis : $this->session->userdata('namapenulis'); ?>">
              </div>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="nomerinduk" 
                value=" <?php echo ($this->session->userdata('nomerinduk') == '') ? $key->nomer_induk : $this->session->userdata('nomerinduk'); ?>">
              </div>
              <div class="col-sm-3">
              <input type="email" class="form-control" name="email"
               value="<?php echo ($this->session->userdata('email') == '') ?  $key->email : $this->session->userdata('email'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="inputstudi" class="col-sm-2 control-label">Program Studi</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="programstudi"
               value="<?php echo ($this->session->userdata('programstudi') == '') ? $key->program_studi : $this->session->userdata('programstudi'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="inputfakultas" class="col-sm-2 control-label">Fakultas</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="fakultas" placeholder="Fakultas" 
               value=" <?php echo ($this->session->userdata('fakultas') == '') ? $key->fakultas : $this->session->userdata('fakultas'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="inputuniversitas" class="col-sm-2 control-label">Universitas</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="universitas" 
               value="<?php echo ($this->session->userdata('universitas') == '') ? $key->universitas : $this->session->userdata('universitas'); ?>" placeholder="Universitas">
              </div>
              </div>

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-9">
              <textarea  class="form-control" name="alamat" rows="3">
              <?php echo ($this->session->userdata('alamat') == '') ? $key->alamat : $this->session->userdata('alamat'); ?></textarea>
              </div>
             </div>

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kata Kunci</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="katakunci" rows="3">
              <?php echo ($this->session->userdata('katakunci') == '') ? $key->kata_kunci : $this->session->userdata('katakunci'); ?></textarea>
              </div>
             </div>
            <br>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Abstrak</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorabstrak" name="abstrak" >
              <?php echo ($this->session->userdata('abstrak') == '') ? $key->abstrak : $this->session->userdata('abstrak'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Pendahuluan</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpendahuluan" name="pendahuluan" >
              <?php echo ($this->session->userdata('pendahuluan') == '') ? $key->pendahuluan : $this->session->userdata('pendahuluan'); ?></textarea>
              </div>
            </div>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kajain Pustaka</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorkajianpustaka" name="kajianpustaka" >
              <?php echo ($this->session->userdata('kajianpustaka') == '') ? $key->kajian_pustaka : $this->session->userdata('kajianpustaka'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Landasan Teori</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorlandasanteori" name="landasanteori" >
              <?php echo ($this->session->userdata('landasanteori') == '') ? $key->landasan_teori : $this->session->userdata('landasanteori'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Metode Penelitian</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditormetodepenelitian" name="metodepenelitian">
              <?php echo ($this->session->userdata('metodepenelitian') == '') ? $key->metode_penelitian : $this->session->userdata('metodepenelitian'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Pembahasan</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpembahasan" name="pembahasan" >
              <?php echo ($this->session->userdata('pembahasan') == '') ? $key->pembahasan : $this->session->userdata('pembahasan'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">penutup</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpenutup" name="penutup" >
              <?php echo ($this->session->userdata('penutup') == '' ) ? $key->penutup : $this->session->userdata('penutup'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Daftar Pustaka</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditordaftarpustaka" name="daftarpustaka" >
              <?php echo ($this->session->userdata('daftarpustaka') == '') ? $key->daftar_pustaka : $this->session->userdata('daftarpustaka'); ?></textarea>
              </div>
            </div>

              

  </form>
     <?php }  ?>


      </div>