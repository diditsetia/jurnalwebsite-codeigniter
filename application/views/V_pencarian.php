<div class="container">
         
             
         
        <div class="row">
            <div class="col-lg-12">
                <h4 style="color: #56bca6">Pencarian Artikel</h4>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        

 		<div class="row">
        <?php foreach ($pencarian as $key ) { ?>
            <div class="col-md-4 ">
                <center><h5><?php echo $key['judul_artikel'];?></h5></center>
                <center><span>ABSTRAK</span></center>
                <p><?php echo substr( $key['abstrak'],0,500)."...";?><h5>Singgih Saputro(11018148)</h5></p>

                <div>
                
                
                <a class="btn btn-default" href="<?php echo site_url('baca/juduljurnal1').'/'.$key['id_artikel']; ?>">Read More</a>
                <span class="glyphicon glyphicon-comment" aria-hidden="true" style="
                    padding-left: 120px;"></span><?php 
                    $query = $this->db->get_where('komentar',array('id_artikel' => $key['id_artikel']));
                ?><span > <?php echo $query->num_rows(); ?><span>


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
              
              
              <!-- <span class="badge like-count"> -->

             <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><?php
              $id = $key['id_artikel'];
              $queryview = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
              ?> <span><?php  echo $queryview->view; ?> </span>
                
                </div>
            </div>
            <!-- /.col-md-4 -->
        
            <!-- /.col-md-4 -->

            <!-- /.col-md-4 -->
             <?php } ?>
        </div>
    </div>