
  
  <div id="sb-site">
  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
      <header>
      <div class="submit_link">
          <input type="submit" value="Metode Penelitian >" class="alt_btn" onClick="parent.location='<?php echo site_url('pratinjaunodb/metodepenelitian1') ?>'" >
        </div>
      <div class="submit_link_back">
        <input type="submit" value="< Kajian Pustaka" class="alt_btn" onClick="parent.location='<?php echo site_url('pratinjaunodb/kajianpustaka1') ?>'" >
      </div>
    

      </header>

      
        <div class="module_content">
                  <?php if ($this->session->userdata('idkategori') == TRUE) { ?>
          <?php $idkategori = $this->session->userdata('idkategori'); 
        $querykategori = $this->db->get_where('kategori',array('id_kategori'=>$idkategori))->row();
        $hasil = $querykategori->nama_kategori; ?>
        <?php } ?>
          <?php if ( $session_id = $this->session->userdata('status') == 'Waiting' && 
          $session_id = $this->session->userdata('status') == 'post' ) { ?>
            <br>
          <div class="row">
          <div class="col-lg-12" align="right" >
                <h7 style="padding-right: 600px;"> Jurnal <?php echo $hasil; ?></h7>
                <h7 style="padding-right: 30px;" > Vol. <?php echo $session_id = $this->session->userdata('vol'); ?> No. <?php echo $session_id = $this->session->userdata('nomer'); ?>
                                                    , <?php echo $session_id = $this->session->userdata('bulan');?><?php echo $session_id = $this->session->userdata('tahun');?>
                                                    </h7>
            <hr>  
            </div>
            <br>
            <br>
          </div>
            <div class="MsoNormal" >
            
            <?php 
            
             echo $session_id = $this->session->userdata('landasanteori');

            ?>
              
            </div>

          

            <div class="clear"></div>
            <?php }else { ?>
            <div class="MsoNormal" >
            
            <?php 
            
             echo $session_id = $this->session->userdata('landasanteori');

            ?>
              
            </div>

          

            <div class="clear"></div>
            <?php } ?>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>