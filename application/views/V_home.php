<div class="container">
         
             
         
        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Artikel Terbaru</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Content Row -->
        <div class="row">
          <?php foreach ($datajurnalpost as $key ) { ?>
            <div class="col-md-4" style=" font-size: 0.5 em; padding:8px;" >
              <div style=" background-color:#fff; border:1px solid Gainsboro; padding:10px; border-radius:5px;">
                 <center><h5 style=" font-size: 1.1em; "><?php echo substr($key['judul_artikel'],0,65)."..";?></h5></center>
                    <center><span>ABSTRAK</span></center>
                    <div style=" height: 200px; width: 100% ; font-size: 1.0 em;">
                    <p ><?php echo substr( $key['abstrak'],0,400).".."?></p>
                  </div>
                  <br>
                  <br>
                   <?php $queryname = $this->db->get_where('user',array('id_user'=>$key['id_user']))->row(); ?>
                    <h5>Dibuat oleh : <?php echo $queryname->nama_user?></h5></p>
                    <p>Kata Kunci : <?php echo substr($key['kata_kunci'],0,83).".."?> </p>
                       <?php if ($key['kolom'] == '2') { ?>
                         <a class="btn btn-default" href="<?php echo site_url('baca/baca2').'/'.$key['id_artikel']; ?>">Read More</a>
                       <?php } else { ?>
                       <a class="btn btn-default" href="<?php echo site_url('baca/juduljurnal1').'/'.$key['id_artikel']; ?>">Read More</a>
                          <?php } ?>
                           <!--  komentar -->
                           <span class="glyphicon glyphicon-comment" aria-hidden="true" style="
                            padding-left: 120px;"></span>
                    <?php $query = $this->db->get_where('komentar',array('id_artikel' => $key['id_artikel']));?>
                    <span > <?php echo $query->num_rows(); ?><span>
                    <!-- view -->
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><?php
                    $id = $key['id_artikel'];
                    $queryview = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                    ?> <span><?php  echo $queryview->view; ?> </span>

                    <!-- like -->
                    <?php
                    $id = $key['id_artikel'];
                    $ip =  $this->input->ip_address();
                    $this->db->where(array('id_artikel' => $id, 'ip' => $ip));
                    $query = $this->db->get('like');
                    if ($query->num_rows() != ($key['id_artikel'] && $this->input->ip_address()  )) { ?>

                    <span class="glyphicon glyphicon-thumbs-up" id="like" data-id="<?php echo $key['id_artikel'] ?>" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-thumbs-down hidden" id="unlike " data-id="<?php echo $key['id_artikel'] ?>" aria-hidden="true"></span>

                    <?php  } else { ?>
                    <span class="glyphicon glyphicon-thumbs-up hidden" id="like" data-id="<?php echo $key['id_artikel'] ?>" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-thumbs-down " id="unlike" data-id="<?php echo $key['id_artikel'] ?>" aria-hidden="true"></span>
                    <?php } ?> 

                    <?php
                    $id = $key['id_artikel'];
                    $querylike = $this->db->get_where('like',array('id_artikel'=>$id));
                    $likesip = $querylike->num_rows();
                    ?>
                    <span class="count"><?php  echo $likesip ;?></span>

              </div>    
             </div>
             <?php } ?>
        </div>
        <br/>
        <div>
        <?php echo $this->pagination->create_links(); ?>
      </div>



         <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #77c7c3">Artikel Terpopuler</h4>
            </div>
        </div>
        <hr>
       
        <div class="row">
          <?php foreach ($populer as $ke) { ?>
            <div class="col-md-4" style=" font-size: 0.5 em; padding:8px;" >
              <div style=" background-color:#fff; border:1px solid Gainsboro; padding:10px; border-radius:5px;">
                 <center><h5 style=" font-size: 1.1em; "><?php echo substr($ke['judul_artikel'],0,65)."..";?></h5></center>
                    <center><span>ABSTRAK</span></center>
                    <div style=" height: 200px; width: 100% ; font-size: 1.0 em;">
                    <p ><?php echo substr( $ke['abstrak'],0,400).".."?></p>
                  </div>
                  <br>
                  <br>
                  <?php $queryname = $this->db->get_where('user',array('id_user'=>$ke['id_user']))->row(); ?>
                    <h5>Dibuat oleh : <?php echo $queryname->nama_user?></h5></p>
                    <p>Kata Kunci : <?php echo substr($ke['kata_kunci'],0,83).".."?> </p>

                    <?php if ($ke['kolom'] == '2') { ?>
                         <a class="btn btn-default" href="<?php echo site_url('baca/baca2').'/'.$ke['id_artikel']; ?>">Read More</a>
                       <?php } else { ?>
                       <a class="btn btn-default" href="<?php echo site_url('baca/juduljurnal1').'/'.$ke['id_artikel']; ?>">Read More</a>
                          <?php } ?>
                   <!--  komentar -->
                           <span class="glyphicon glyphicon-comment" aria-hidden="true" style="
                            padding-left: 120px;"></span>
                    <?php $query = $this->db->get_where('komentar',array('id_artikel' => $ke['id_artikel']));?>
                    <span > <?php echo $query->num_rows(); ?><span>
                    <!-- view -->
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><?php
                    $id = $ke['id_artikel'];
                    $queryview = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                    ?> <span><?php  echo $queryview->view; ?> </span>

                    <!-- like -->
                    <?php
                    $id = $ke['id_artikel'];
                    $ip =  $this->input->ip_address();
                    $this->db->where(array('id_artikel' => $id, 'ip' => $ip));
                    $query = $this->db->get('like');
                    if ($query->num_rows() != ($ke['id_artikel'] && $this->input->ip_address()  )) { ?>

                    <span class="glyphicon glyphicon-thumbs-up" id="like" data-id="<?php echo $ke['id_artikel'] ?>" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-thumbs-down hidden" id="unlike " data-id="<?php echo $ke['id_artikel'] ?>" aria-hidden="true"></span>

                    <?php  } else { ?>
                    <span class="glyphicon glyphicon-thumbs-up hidden" id="like" data-id="<?php echo $ke['id_artikel'] ?>" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-thumbs-down " id="unlike" data-id="<?php echo $ke['id_artikel'] ?>" aria-hidden="true"></span>
                    <?php } ?> 

                    <?php
                    $id = $ke['id_artikel'];
                    $querylike = $this->db->get_where('like',array('id_artikel'=>$id));
                    $likesip = $querylike->num_rows();
                    ?>
                    <span class="count"><?php  echo $likesip ;?></span>

              </div>    
             </div>
             <?php } ?>
        </div>

                        
  </div>




   

