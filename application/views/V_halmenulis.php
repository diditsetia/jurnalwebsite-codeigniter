 <div class="container" >

        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Menulis Artikel Jurnal</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>
    
        <form  enctype='multipart/form-data' class="form-horizontal" action="<?php echo site_url('web/post'); ?>" method="post">

         <div class="form-group ">
         <!-- Modal send -->
         <div class="col-sm-1">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">send</button>
        </div>
        <!-- Modal save -->
         <div class="col-sm-1">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalsave">okay</button>
        </div>

      <div class="col-sm-1">
        <button type="submit" name="cancel" class="btn btn-info" style="width:100%">cancel</button>
      </div>
    </div>  

      
  
 

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
        <button type="submit"  name="submit" value="send" class="btn btn-info"   style="width:100%">1 kolom</button>
        </div>
        <div class="col-sm-6">
        <button type="submit"  name="submit" value="send" class="btn btn-info"   style="width:100%">2 kolom</button>
        </div>
        </div>
      </div>
    </div>
  </div>


   

      <div class="summernote">
              <div class="form-group">
              <label for="exampleTextarea" class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-9">
              <textarea name="judul" required id="summernote9"></textarea>
              </div>
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
            <hr>



                
                 <div class="summernote">
      <div  class="col-md-12">
        <label>Abstrak</label>
        <textarea name="abstrak" required id="summernote1"></textarea>
      </div>
     
    </div>

         <div class="summernote">
      <div  class="col-md-12">
        <label>Pendahuluan</label>
        <textarea name="pendahuluan" required id="summernote2"></textarea>
      </div>
     
    </div>

       <div class="summernote">
      <div  class="col-md-12">
        <label>Kajian Pustaka</label>
        <textarea name="kajianpustaka" required id="summernote3"></textarea>
      </div>
     
    </div>

    <div class="summernote">
      <div  class="col-md-12">
        <label>Landasan Teori</label>
        <textarea name="landasanteori" required id="summernote4"></textarea>
      </div>
    </div>

    <div class="summernote">
      <div  class="col-md-12">
        <label>Metode Penelitian</label>
        <textarea name="metodepenelitian" required id="summernote5"></textarea>
      </div>
    </div>

    <div class="summernote">
      <div  class="col-md-12">
        <label>Hasil dan Pembahasan</label>
        <textarea name="pembahasan" required id="summernote6"></textarea>
      </div>
    </div>

    <div class="summernote">
      <div  class="col-md-12">
        <label>Penutup</label>
        <textarea name="penutup" required id="summernote7"></textarea>
      </div>
    </div>

    <div class="summernote">
      <div  class="col-md-12">
        <label>Daftar Pustaka</label>
        <textarea name="daftarpustaka" required id="summernote8"></textarea>
      </div>
     
    </div>


    


    <br>
    <hr>

  </form>

      </div>