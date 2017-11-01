

<div id="sb-site">

 

  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
      <header>

      <div class="submit_link">
          <input type="submit" value="Pendahuluan >" class="alt_btn" onClick="parent.location='<?php echo site_url('pratinjaunodb/pendahuluan1') ?>'"  >
        </div>

      </header>
        

        <div class="module_content">
        <?php if ($this->session->userdata('idkategori') == TRUE) { ?>
            
           
        <?php $idkategori = $this->session->userdata('idkategori'); 
        $querykategori = $this->db->get_where('kategori',array('id_kategori'=>$idkategori))->row();
        $hasil = $querykategori->nama_kategori; ?>

        <?php } ?> 
        <?php if ( $session_id = $this->session->userdata('status') == 'Waiting' && $session_id = $this->session->userdata('status') == 'post' ) { ?>
            <br>
          <div class="row">
          <div class="col-lg-12" align="right" >
                <h7 style="padding-right: 600px;"> Jurnal <?php echo $hasil ?></h7>
                <h7 style="padding-right: 30px;" > Vol. <?php echo $session_id = $this->session->userdata('vol'); ?> No. <?php echo $session_id = $this->session->userdata('nomer'); ?>
                                                    , <?php echo $session_id = $this->session->userdata('bulan');?> <?php echo $session_id = $this->session->userdata('tahun');?>
                                                    </h7>
            <hr>  
            </div>
            <br>
            <br>
          </div>
              <div class="MsoNormal" > 

              
            <div class="col-lg-12" style="text-align: center; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
             echo $session_id = $this->session->userdata('judul');
            ?>
            </div>
            <br>
            <br>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('namapenulis').','.$this->session->userdata('nomerinduk');
            ?>
            </div>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('programstudi').','.$this->session->userdata('fakultas');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('universitas');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('alamat');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('email');
            ?>
            </div>
            <br>
            <br>
             <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <h4>ABSTRAK</h4>
            </div>
            <div class="col-lg-12" >

            <?php
            
            echo $session_id = $this->session->userdata('abstrak');
            ?>
              
            </div>
             <div class="col-lg-12" >

            <h5> Kata Kunci : <?php echo $session_id = $this->session->userdata('katakunci');?> <h5>
          
            </div>

          
            </div>
            <div class="clear"></div>

        </div>

       <?php }else { ?>
      
           
              <div class="MsoNormal" > 

              
            <div class="col-lg-12" style="text-align: center; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
             echo $session_id = $this->session->userdata('judul');
            ?>
            </div>
            <br>
            <br>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('namapenulis').','.$this->session->userdata('nomerinduk');
            ?>
            </div>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('programstudi').','.$this->session->userdata('fakultas');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('universitas');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('alamat');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo $session_id = $this->session->userdata('email');
            ?>
            </div>
            <br>
             <br>
             <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <h4>ABSTRAK</h4>
            </div>
            <div class="col-lg-12" >
            <?php
            
            echo $session_id = $this->session->userdata('abstrak');
            ?>
          
            </div>
            <div class="col-lg-12" >

            <h5> Kata Kunci : <?php echo $session_id = $this->session->userdata('katakunci');?> <h5>
          
            </div>


            <div class="clear"></div>

        </div>
        <?php } ?>
           
 
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>