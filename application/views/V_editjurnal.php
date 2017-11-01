 <div class="container" >

        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Edit Artikel Jurnal</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <?php foreach ($dataeditjurnal as $key ) { ?>

      
        <form  enctype='multipart/form-data' class="form-horizontal" action="<?php echo site_url('Updatejurnal/update'); ?>" method="post">

         <div class="form-group ">
         <div  class="col-sm-2 ">
                <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalpratinjau">pratinjau</button> -->
                <button type="submit" name="submit" value="pratinjauredaksi" class="btn btn-info" style="width:100%">pratinjau</button>
          </div>
         <div class="col-sm-1">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">post</button>
        </div>
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
 

  <!-- Modal post -->
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
        <button type="submit"  name="submit" value="postupdate1" class="btn btn-info"   style="width:100%">1 kolom</button>
        </div>
        <div class="col-sm-6">
        <button type="submit"  name="submit" value="postupdate2" class="btn btn-info"   style="width:100%">2 kolom</button>
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
          <h4 class="modal-title">FORMAT KOLOM</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>pilih format kolom yang anda inginkan ?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-6">
        <button type="submit" name="submit" value="saveupdate1" class="btn btn-info" style="width:100%">1 kolom</button>
      </div>
        <div class="col-sm-6">
        <button type="submit" name="submit" value="saveupdate2" class="btn btn-info" style="width:100%">2 kolom</button>
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
        <button type="submit" name="submit" value="cancelredaksi" class="btn btn-info" style="width:100%">Tutup</button>
      </div>
        </div>
      </div>
    </div>
  </div>
              <input type="hidden" name="id" value="<?php echo $key->id_artikel?>">
              <div class="form-group">
              <div  >
              <label for="inputvolume" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Vol
              </label>
              </div>
                <div class="col-sm-3">
              <input type="text" class="form-control" name="vol" placeholder="Vol"  
                value=" <?php echo ($this->session->userdata('vol') == '') ? $key->vol : $this->session->userdata('vol'); ?>" >
              </div>
              </div>

                <div class="form-group">
              <div  >
              <label for="inputvolume" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Nomer
              </label>
              </div>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="nomer" placeholder="Nomer"  
                value=  " <?php echo ($this->session->userdata('nomer') == '') ? $key->nomer : $this->session->userdata('nomer'); ?> " >
              </div>
              </div>


                <div class="form-group">
              <div >
              <label  class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Bulan
              </label>
              </div>

                <div class="col-sm-3">
                     <select name="bulan" class="form-control">
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                      if ($bulan[$c]==$key->bulan || $bulan[$c]== $this->session->userdata('bulan')) {
                        echo"<option selected value=$bulan[$c]> $bulan[$c] </option>";
                      }else {
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                      }
                    }
                    ?>
                    </select>
             
              </div>
              </div>

                  <div class="form-group">
              <div >
              <label for="inputhalaman" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Tahun
              </label>
              </div>
              <div class="col-sm-3">

                 <?php
                $now=date('Y');
                  echo "<select name='tahun' class='form-control'>";
                for ($a=2000;$a<=$now;$a++)
                 {
                  
                  if ($a==$key->tahun || $a== $this->session->userdata('tahun')) {
                    echo "<option selected value='$a'>$a</option>";
                  }
                  else {
                    echo "<option value='$a'>$a</option>";
                  }
                } 
                echo "</select>";
                 ?>

              </div>
              </div>

               <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-1">
               <input type="text" class="form-control" name="kategori" 
               value="<?php echo ($this->session->userdata('idkategori') == '') ? $key->id_kategori : $this->session->userdata('idkategori'); ?>" placeholder="kategori">
              </div>
             </div>


              <div class="form-group">
              <div >
              <label for="kolom" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Kolom
              </label>
              </div>
               <div class="col-sm-1">
              <input type="text" class="form-control" name="kolom" placeholder="kolom"
                value=" <?php echo ($this->session->userdata('kolom') == '') ? $key->kolom : $this->session->userdata('kolom'); ?>" >
              </div>  
              </div>


               <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorjudul" name="judul"  >
                <?php echo ($this->session->userdata('judul') == '') ? $key->judul_artikel : $this->session->userdata('judul'); ?></textarea>
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
               value="<?php echo ($this->session->userdata('nomerinduk') == '') ? $key->nomer_induk : $this->session->userdata('nomerinduk'); ?>">
              </div>
              <div class="col-sm-3">
              <input type="email" class="form-control" name="email"  
               value="<?php echo ($this->session->userdata('email') == '') ? $key->email : $this->session->userdata('email');?>">
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
              <?php echo ($this->session->userdata('penutup') == '') ? $key->penutup : $this->session->userdata('penutup'); ?></textarea>
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