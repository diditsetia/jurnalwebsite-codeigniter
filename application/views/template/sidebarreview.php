  <style type="text/css">

  .label, label {
    font-size: 12px;
    color: black;
}

 </style>
 <aside id="sidebar" class="column" style=" margin-top: 40px; ">
      <hr/>
      <?php $idartikel =$this->uri->segment(3); ?>
     
      <h3>Menu</h3> 
      <ul class="toggle">
        <li class="icn_categories"><a href="<?php echo site_url('review/juduljurnal1').'/'.$idartikel; ?>">Abstrak </a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/pendahuluan1').'/'.$idartikel; ?>">Pendahuluan</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/kajianpustaka1').'/'.$idartikel; ?>">Kajianpustaka</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/landasanteori1').'/'.$idartikel; ?>">Landasan Teori</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/metodepenelitian1').'/'.$idartikel;?>">Metode Penelitian</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/pembahasan1').'/'.$idartikel; ?>">Pembahasan</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/penutup1').'/'.$idartikel; ?>">Penutup</a></li>
        <li class="icn_categories"><a href="<?php echo site_url('review/daftarpustaka1').'/'.$idartikel; ?>">Daftar Pustaka</a></li>
      
      </ul>
      <br>
      <form  enctype='multipart/form-data'  action="<?php echo site_url('review/perbaikan'); ?>" method="post">
      <ul>
      <div style="margin-left: 10px;">

        <input type="hidden" class="form-control" name="idartikel" value="<?php echo $this->uri->segment(3); ?>" placeholder="idartikel">
                 <label style="
               margin-top: px;" >Pesan Revisi</label>
              <textarea style="margin: 0px -17.3906px 0px 0px; height: 431px; width: 224px;"  class="form-control "  name="perbaikan" placeholder="tulis disini.." >
              <?php $idartikel =$this->uri->segment(3); ?>
               <?php $queryuraian = $this->db->get_where('artikel',array('id_artikel'=>$idartikel))->row(); ?> 
                <?php echo ( $this->session->userdata('perbaikan') == '') ?  $queryuraian->uraianperbaikan :  $this->session->userdata('perbaikan'); ?>
              </textarea>
      </div>
      <div class="col-md-6" > 
                 <label style="
               " ></label>
              <button type="submit"  name="submit"   class="btn btn-info"   style="width:100%">Save</button>
              </div>
    </ul>
  </form>
    </aside>

