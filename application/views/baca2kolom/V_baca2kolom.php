<div class="container">

          
        <!-- Title -->
        
        <br>
        <div class="row">
          
         <?php $querykategori = $this->db->get_where('kategori',array('id_kategori'=>$datajurnal->id_kategori))->row(); ?>
       <?php $hasil = $querykategori->nama_kategori; ?>
            <div class="col-lg-12" align="right" >
                <h7 style="padding-right: 600px;">Jurnal <?php echo $hasil ?></h7>
                <h7 style="padding-right: 110px;" >Vol. <?php echo $datajurnal->vol;?> No. <?php echo $datajurnal->nomer;?>
                                                    , <?php echo $datajurnal->bulan;?> <?php echo $datajurnal->tahun?>
                                                    </h7>
                
            </div>
            
        </div>
        <!-- /.row -->
           
          <div class="form-group">

              <div  class="col-sm-1 ">
                
              </div>
              <div class="col-sm-10">
               <hr>
              <div class="page-title text-center">
                    <p><b style=" font-size:1.2em;" ><?php  echo  $datajurnal->judul_artikel; ?></b></p>
                      </div>
                      <center><span>ABSTRAK</span></center>
                      <p ><?php  echo  $datajurnal->abstrak; ?></p>
                      <?php $queryname = $this->db->get_where('user',array('id_user'=>$datajurnal->id_user))->row(); ?>
                      <h5><b>Dibuat oleh :</b> <?php echo $queryname->nama_user?></h5></p>
                      <h5><b>Kata Kunci : </b><?php  echo  $datajurnal->kata_kunci; ?></h5>
                      
                      <br>
                      <div>
                  
                <a class="btn btn-default" href="<?php echo site_url('baca/baca2kolom').'/'.$datajurnal->id_artikel; ?> " target="_blank">Baca Selengkapnya</a>
                <!--  komentar    -->
                <span style="padding-left:620px;" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-comment" aria-hidden="true" >
                </span> <?php 
                 $query = $this->db->get_where('komentar',array('id_artikel' => $datajurnal->id_artikel));
                ?>
                <span> <?php echo $query->num_rows(); ?><span>
                  
                <!-- like -->

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

               <!--  view -->
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
              <?php $id = $this->uri->segment(3);
                $queryview = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                ?> <span><?php  echo $queryview->view; ?> </span>

                
                </div>
                <br>
                <br>

              </div>

             
              </div> 
               
            
            
    
        </div> 
       
        

    