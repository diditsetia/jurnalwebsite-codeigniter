<style type="text/css">
  #searchtext i{
      background-color:#FF9;
      color:#555;
  }
  </style>
  
  <div>
  <section id="" class="column">
    
    <div class="clear"></div>
    
    <article class="module width_full">
      <header>
      <div class="submit_link">
          <input type="submit" value="Kajian Pustaka >" class="alt_btn" onClick="parent.location='<?php echo site_url('baca/kajianpustaka1').'/'.$datajurnal->id_artikel; ?>'" >
        </div>
      <div class="submit_link_back">
        <input type="submit" value=" < Judul Jurnal" onClick="parent.location='<?php echo site_url('baca/juduljurnal1').'/'.$datajurnal->id_artikel; ?>'" >
      </div>
    

      </header>

      
        <div class="module_content">
         <br>

          <div class="row">

          
          <?php $querykategori = $this->db->get_where('kategori',array('id_kategori'=>$datajurnal->id_kategori))->row(); ?>
        <?php $hasil = $querykategori->nama_kategori; ?>
          <div class="col-lg-12" align="right" >
                <h7 style="padding-right: 640px;">Jurnal <?php echo $hasil ?></h7>
                <h7 style="padding-right: 30px;" > Vol. <?php echo $datajurnal->vol;?> No. <?php echo $datajurnal->nomer;?>
                                                     ,<?php echo $datajurnal->bulan;?> <?php echo $datajurnal->tahun?>
                                                         </h7>

                <hr>

                
            </div>
            <br>
            <br>
            
        </div>
            <div class="MsoNormal" id="searchtext" >
            
               <?php 
            echo $datajurnal->pendahuluan;


            ?>
              
            </div>
             <div class="col-lg-12">
                <hr>
            </div>
            <div class="col-lg-12" align="right" style="padding-right: 40px;" >
              
               <span data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-comment" aria-hidden="true" >
                </span><?php 
                 $query = $this->db->get_where('komentar',array('id_artikel' => $datajurnal->id_artikel));
                ?>
                <span> <?php echo $query->num_rows(); ?><span>


              <?php
              $id = $this->uri->segment(3);
              $ip =  $this->input->ip_address();
              $this->db->where(array('id_artikel' => $id, 'ip' => $ip));
              $query = $this->db->get('like');
              if ($query->num_rows() != ($datajurnal->id_artikel && $this->input->ip_address()  )) { ?>

              <span class="glyphicon glyphicon-thumbs-up" id="like" data-id="<?php echo $datajurnal->id_artikel; ?>" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-thumbs-down hidden" id="unlike " data-id="<?php echo $datajurnal->id_artikel; ?>" aria-hidden="true"></span>

             <?php  } else { ?>
             <span class="glyphicon glyphicon-thumbs-up hidden" id="like" data-id="<?php echo $datajurnal->id_artikel; ?>" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-thumbs-down " id="unlike" data-id="<?php echo $datajurnal->id_artikel; ?>" aria-hidden="true"></span>
              <?php } ?> 

                <?php
                $id = $this->uri->segment(3);
                $querylike = $this->db->get_where('like',array('id_artikel'=>$id));
                $likesip = $querylike->num_rows();
                ?>
                <span class="count"><?php  echo $likesip ;?></span>
              
              
              
              
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
              <?php $id = $this->uri->segment(3);
                $queryview = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                ?> <span><?php  echo $queryview->view; ?> </span>
               
              
            </div>
            <br>
            <div class="clear"></div>

        </div>
    </article><!-- end of post new article -->
    <div class="spacer"></div>
  </section>
  </div>

  <script type="text/javascript">
  function start(){
    console.log("hill");
  }
  $(function(){
  $('#star').on('click', function(){
    console.log('ngeklik');

  });
  $('.okay').on('click', function(){
    var $this = $(this);
    var id = $this.data('id');
    
    /* alert(id); */
    /*
    $.get('like.php', {'id': id, 'type': 'like'}, function(res){
      alert(res);
    });
    */
    
    doAction($this, id, 'like');
    return false;
  });
  
  $('.unlike').on('click', function(){
    var $this = $(this);
    var id = $this.data('id');
    
    doAction($this, id, 'unlike');
    return false;
  });
  
  function doAction(obj, id, type) {
    $.get('like.php', {'id': id, 'type': type}, function(res){
      if(res != 'voted') {
        /* alert(res); */
        /* var like = obj.parent().find('span'); */
        var like = obj.parent().find('.like-count');
        var count = like.text();
        like.fadeOut().text(res).fadeIn();
        obj.parent().find('.hidden').removeClass('hidden');
        obj.addClass('hidden');
      } else {
        alert('You already voted this product');
      }
    });
  }
});
  </script>