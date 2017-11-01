  
  <div id="sb-site">
  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
     <header>
      <div class="submit_link">
          <input type="submit" value="Landasan teori >" class="alt_btn" onClick="parent.location='<?php echo site_url('review/landasanteori1').'/'.$datajurnal->id_artikel; ?>'" >
        </div>
      <div class="submit_link_back">
        <input type="submit" value="< Pendahuluan" class="alt_btn" onClick="parent.location='<?php echo site_url('review/pendahuluan1').'/'.$datajurnal->id_artikel; ?>'" >
      </div>
    

      </header>

      
        <div class="module_content">
            <div class="MsoNormal" >
            
               <?php 
            echo $datajurnal->kajian_pustaka;


            ?>
              
            </div>

          

            <div class="clear"></div>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>