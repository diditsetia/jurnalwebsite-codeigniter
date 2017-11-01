 <div class="container" >

        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Menulis Artikel Jurnal</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    
        <form  enctype='multipart/form-data' class="form-horizontal" action="<?php echo site_url('web/post'); ?>" method="post">

          <div class="form-group">
              <div  class="col-sm-2 ">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalpratinjau">pratinjau</button>
              </div>
              <div class="col-sm-1">
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalsave">save</button>
              </div>
              <div class="col-sm-1">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">send</button>
              </div>
              <div class="col-sm-1">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalcancel">cancel</button>
              </div>
              </div>

                session_start();
        if (isset($_POST['submit'])) {
          $_SESSION['pos'] = $_POST;
        }
        
        

        if (isset($_SESSION['pos'])) {
          
          
           $abstrak = $_SESSION['pos']['abstrak'];

           

           
           
           $this->template->keempat('pratinjaucoba/V_judulcoba');

        }



       

      
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
          <h4 class="modal-title">FORMAT KOLOM</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>pilih format kolom yang anda inginkan ?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-6">
        <button type="submit" name="submit" value="save1" class="btn btn-info" style="width:100%">1 kolom</button>
      </div>
        <div class="col-sm-6">
        <button type="submit" name="submit" value="save2" class="btn btn-info" style="width:100%">2 kolom</button>
      </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal pratinjau -->
  <div id="myModalpratinjau" class="modal fade" role="dialog">
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
          <p>pilih format kolom yang ingin di pratinjau? </p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        <div class="col-sm-6">
        <button type="submit" name="submit" value="pratinjauone" class="btn btn-info" style="width:100%">1 kolom</button>
      </div>
        <div class="col-sm-6">
        <button type="submit" name="submit" value="pratinjautwo" class="btn btn-info" style="width:100%">2 kolom</button>
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

               <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorjudul" name="judul" ></textarea>
              </div>
            </div>

              <div class="form-group">
              <label for="inputnama" class="col-sm-2 control-label">
                 <a class="" style="right: 5px;">
                 </a>
              Penulis
              </label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="namapenulis" placeholder="Nama Penulis">
              </div>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="nomerinduk" placeholder="Nomer Induk">
              </div>
              <div class="col-sm-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              </div>

              <div class="form-group">
              <label for="inputstudi" class="col-sm-2 control-label">Program Studi</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="programstudi" placeholder="Program Studi">
              </div>
              </div>

              <div class="form-group">
              <label for="inputfakultas" class="col-sm-2 control-label">Fakultas</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="fakultas" placeholder="Fakultas">
              </div>
              </div>

              <div class="form-group">
              <label for="inputuniversitas" class="col-sm-2 control-label">Universitas</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="universitas" placeholder="Universitas">
              </div>
              </div>

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="alamat" rows="3"></textarea>
              </div>
             </div>

              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kata Kunci</label>
              <div class="col-sm-9">
              <textarea class="form-control" name="katakunci" rows="3"></textarea>
              </div>
             </div>
            <br>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Abstrak</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorabstrak" name="abstrak" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Pendahuluan</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpendahuluan" name="pendahuluan" ></textarea>
              </div>
            </div>

             <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Kajain Pustaka</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorkajianpustaka" name="kajianpustaka" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Landasan Teori</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorlandasanteori" name="landasanteori" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Metode Penelitian</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditormetodepenelitian" name="metodepenelitian" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Pembahasan</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpembahasan" name="pembahasan" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">penutup</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditorpenutup" name="penutup" ></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Daftar Pustaka</label>
              <div class="col-sm-10">
              <textarea class="form-control mceEditordaftarpustaka" name="daftarpustaka" ></textarea>
              </div>
            </div>      

  </form>

      </div>