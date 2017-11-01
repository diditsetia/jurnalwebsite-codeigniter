

    


<div id="sb-site">

 

  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
      <header>

      <div class="submit_link">
          <input type="submit" value="Pendahuluan >" class="alt_btn" onClick="parent.location='<?php echo site_url('review/pendahuluan1').'/'.$datajurnal->id_artikel; ?>'" >
        </div>
      </header>

      
        <div class="module_content">
            

            <div class="MsoNormal" >     
            <div class="col-lg-12" style="text-align: center; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $datajurnal->judul_artikel;
            ?>
            </div>
            <br>
            <br>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $datajurnal->nama_penulis.','.$datajurnal->nomer_induk;
            ?>
            </div>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $datajurnal->program_studi.','.$datajurnal->fakultas;
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $datajurnal->universitas;
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $datajurnal->alamat;
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $datajurnal->email;
            ?>
            </div>
            <br>

            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em; margin-top: 10px;">
                <?php echo "ABSTRAK"; ?>
            </div>
            <div class="col-lg-12" >

            <?php
            echo $datajurnal->abstrak;
            ?>
            </div>
            <br>
            <br>
            <div class="col-lg-12" >
            <h5> Kata Kunci : <?php echo $datajurnal->kata_kunci; ?> <h5>
            </div>

            <div class="clear"></div>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>