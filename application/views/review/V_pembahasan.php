  
  <div id="sb-site">
  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
     <header>
      <div class="submit_link">
          <input type="submit" value="Penutup >" class="alt_btn" onClick="parent.location='<?php echo site_url('review/penutup1').'/'.$datajurnal->id_artikel; ?>'" >
        </div>
      <div class="submit_link_back">
        <input type="submit" value="< Metode Penelitian" class="alt_btn" onClick="parent.location='<?php echo site_url('review/metodepenelitian1').'/'.$datajurnal->id_artikel; ?>'" >
      </div>
    

      </header>
    

      </header>

      
        <div class="module_content">
            <div class="MsoNormal" >
            
               <?php 
            echo $datajurnal->pembahasan;


            ?>
              
            </div>

          

            <div class="clear"></div>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>