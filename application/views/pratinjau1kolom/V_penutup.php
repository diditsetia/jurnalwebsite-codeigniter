  
  <div id="sb-site">
  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
      <header>
      <div class="submit_link">
          <input type="submit" value="Daftar Pustaka >" class="alt_btn" onClick="parent.location='<?php echo site_url('pratinjau/daftarpustaka1').'/'.$datajurnal->id_artikel; ?>'" >
        </div>
      <div class="submit_link_back">
        <input type="submit" value="< Pembahasan" class="alt_btn" onClick="parent.location='<?php echo site_url('pratinjau/pembahasan1').'/'.$datajurnal->id_artikel; ?>'" >
      </div>
    

      </header>

      
        <div class="module_content">
            <div class="MsoNormal" >
            
               <?php 
            echo $datajurnal->penutup;


            ?>
              
            </div>

          

            <div class="clear"></div>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>