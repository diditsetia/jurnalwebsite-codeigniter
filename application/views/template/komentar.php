 <!-- Modal komentar -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Komentar</h4>
        </div>
        <!-- body modal -->
          <form  enctype='multipart/form-data' class="form-horizontal" action="<?php echo site_url('web/komentar'); ?>" method="post">
        <div class="modal-body"  >
          <p style=" padding-left: 5px; ">apa pesan anda ?</p>
        </div>

         <input type="hidden" class="form-control" name="id" value="<?php echo $this->uri->segment(3);?>" >
         <input type="hidden" class="form-control" name="bacajurnal" value="<?php echo $this->uri->segment(2);?>" >
        <div class="col-sm-12" style=" padding-top: 10px; ">
        <input type="text" class="form-control" name="nama" placeholder="nama anda">
        </div>
        <div class="col-sm-12" style=" padding-top: 10px; ">
        <textarea class="form-control" name="komentar" rows="3" placeholder="pesan anda"></textarea>
        </div>

        <!-- footer modal -->


        <div class="modal-footer">
        <div class="col-sm-3" style="padding-top: 10px; padding-left: 0px; ">
        <button type="submit"  name="submit"  class="btn btn-info"   style="width:100%">Kirim</button>
        </div>
        </div>
        </form>
      </div>
    </div>
  </div>