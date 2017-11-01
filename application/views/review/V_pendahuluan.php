

  
  <div id="sb-site">
  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
      <header>
      <div class="submit_link">
          <input type="submit" value="Kajian Pustaka >" class="alt_btn" onClick="parent.location='<?php echo site_url('review/kajianpustaka1').'/'.$datajurnal->id_artikel; ?>'" >
        </div>
      <div class="submit_link_back">
        <input type="submit" value="< Judul Jurnal" class="alt_btn" onClick="parent.location='<?php echo site_url('review/juduljurnal1').'/'.$datajurnal->id_artikel; ?>'" >
      </div>
    

      </header>

      
        <div class="module_content">
            <div class="MsoNormal" >
            
               <?php 
            echo $datajurnal->pendahuluan;


            ?>
              
            </div>

          

            <div class="clear"></div>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>