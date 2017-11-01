

 <div class="container" >

        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Menulis Artikel Jurnal</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    
        <form  enctype='multipart/form-data' class="form-horizontal" action="<?php echo site_url('web/post'); ?>" method="post">

          <div class="form-group">
              <div  class="col-sm-2 ">
                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalpratinjau">pratinjau</button> -->
                <button type="submit" name="submit" value="pratinjauone" class="btn btn-info" style="width:100%">pratinjau</button>
              </div>
              <div class="col-sm-1">
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalsave">save</button>
              </div>
              <!-- <div class="col-sm-1"> 
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">send</button>
              </div> -->
              <div class="col-sm-1">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalcancel">cancel</button>
              </div>
              </div>


      
  <!-- Tombol untuk menampilkan modal-->


  <!-- Modal send -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">FORMAT KOLOM</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>pilih format kolom yang anda inginkan ?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-6">
        <button type="submit"  name="submit" value="send1" class="btn btn-info"   style="width:100%">1 kolom</button>
        </div>
        <div class="col-sm-6">
        <button type="submit"  name="submit" value="send2" class="btn btn-info"   style="width:100%">2 kolom</button>
        </div>
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
        <div class="modal-body">
          <p>Nama File</p>
           <input type="text" class="form-control" name="namafile" placeholder="nama file">
           <p style=" margin-top: 10px;">Status</p>
           <div class="radio">
           <label>
           <input type="radio" name="status"  value="draf" >
            draf
            </label>
            <label>
             <input type="radio" name="status" value="final">
             final
            </label>
            </div>
            
          
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        
        <div >
        <button type="submit" name="submit" value="save1" class="btn btn-info" style="width:20%"> Save</button>
      
      </div>
    
        </div>

      </div>
    </div>
  </div>

   <!-- Modal pratinjau -->
  <!-- <div id="myModalpratinjau" class="modal fade" role="dialog"> -->
    <div id="mdlModal" class="modal-dialog" style="<?php if($this->session->userdata('active') == 'true'){ echo "display:block"; } else { echo "display:none"; }; ?>">
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
        
        <a href="<?php echo site_url('pratinjaunodb/judul1') ?>" target="_blank" class="btn btn-info" style="width:100%" >1 kolom</a>
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
              
              <input type="hidden" class="form-control" name="iduser" value="<?php echo $this->session->userdata('id'); ?>" placeholder="iduser">
              
               <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-9">
                 <textarea class="form-control mceEditorjudul" name="judul" ><?php echo $this->session->userdata('judul'); ?></textarea>
              </div>
            </div>

              <div class="form-group">
              <label for="inputnama" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Penulis
              </label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="namapenulis" value="<?php echo $this->session->userdata('namapenulis'); ?>" placeholder="Nama Penulis">
              </div>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="nomerinduk" placeholder="Nomer Induk" value="<?php echo $this->session->userdata('nomerinduk'); ?>">
              </div>
              <div class="col-sm-3">
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="inputstudi" class="col-sm-2 control-label">Program Studi</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="programstudi" placeholder="Program Studi" value="<?php echo $this->session->userdata('programstudi'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="inputfakultas" class="col-sm-2 control-label">Fakultas</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="fakultas" placeholder="Fakultas" value="<?php echo $this->session->userdata('fakultas'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="inputuniversitas" class="col-sm-2 control-label">Universitas</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="universitas" placeholder="Universitas" value="<?php echo $this->session->userdata('universitas'); ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-9">
              <textarea class="form-control" placeholder="alamat/universitas/alamatanda/perusahaan" name="alamat" rows="3"><?php echo $this->session->userdata('alamat'); ?></textarea>
              </div>
             </div>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-3">
                     <select name="kategori" class="form-control" style="">
                     <option value="">Pilih Kategori</option>
                     <?php $datakategori = $this->db->get('kategori')->result_array(); ?>

                     <?php foreach ( $datakategori as $key  ) { 
                      
                          if ( $this->session->userdata('idkategori') == $key['id_kategori']) { ?>
                           <option selected value='<?php echo $key['id_kategori'] ?>' ><?php echo $key['nama_kategori'] ?></option>
                          <?php }
                          else { ?>
                          <option value='<?php echo $key['id_kategori'] ?>' ><?php echo $key['nama_kategori'] ?></option>
                          <?php }
                          
                     } ?>
                    </select>   
              </div>
             </div>

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kata Kunci</label>
              <div class="col-sm-9">
              <textarea class="form-control" placeholder="katakunci" name="katakunci" rows="3"><?php echo $this->session->userdata('katakunci'); ?></textarea>
              </div>
             </div>
            <br>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Abstrak</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorabstrak" name="abstrak" ><?php echo $this->session->userdata('abstrak'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Pendahuluan</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpendahuluan" name="pendahuluan" ><?php echo $this->session->userdata('pendahuluan'); ?></textarea>
              </div>
            </div>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kajain Pustaka</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorkajianpustaka" name="kajianpustaka" ><?php echo $this->session->userdata('kajianpustaka'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Landasan Teori</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorlandasanteori" name="landasanteori" ><?php echo $this->session->userdata('landasanteori'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Metode Penelitian</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditormetodepenelitian" name="metodepenelitian" ><?php echo $this->session->userdata('metodepenelitian'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Pembahasan</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpembahasan" name="pembahasan" ><?php echo $this->session->userdata('pembahasan'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">penutup</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpenutup" name="penutup" ><?php echo $this->session->userdata('penutup'); ?></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Daftar Pustaka</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditordaftarpustaka" name="daftarpustaka" ><?php echo $this->session->userdata('daftarpustaka'); ?></textarea>
              </div>
            </div>
 

  </form>

      </div>