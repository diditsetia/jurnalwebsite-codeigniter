<div class="container">

          
        <!-- Title -->
        
        <br>
        <div class="row">
            <div class="col-lg-12" align="right" >
                <h7 style="padding-right: 110px;" >Vol. <?php echo $datareadmore->vol;?> No. <?php echo $datareadmore->nomer;?>
                                                    , <?php echo $datareadmore->bulan;?><?php echo $datareadmore->tahun?>
                                                    : <?php echo $datareadmore->halaman ?></h7>
                
            </div>
            
        </div>
        <!-- /.row -->
           
          <div class="form-group">

              <div  class="col-sm-1 ">
                
              </div>
              <div class="col-sm-10">
               <hr>
              <div class="page-title text-center">
                    <p><b><?php  echo  $datareadmore->judul_artikel; ?></b></p>
                </div>
              <center><span>ABSTRAK</span></center>
                <p><?php  echo  $datareadmore->abstrak; ?><h5><b>Kata Kunci : </b><?php  echo  $datareadmore->kata_kunci; ?></h5></p>
                <br>
                <div>
                    
                    <?php if (  $datareadmore->status == 'post' && $datareadmore->kolom ==  '1' ) { ?>
                           <a class="btn btn-default" href="<?php echo site_url('baca/juduljurnal1').'/'.$datareadmore->id_artikel; ?>">Baca</a>

                    <?php } elseif (  $datareadmore->status == 'post' && $datareadmore->kolom ==  '2' )  { ?>
                    <a class="btn btn-default" href="">Baca</a>
                    <?php } ?>
                    

                    
                <span class="glyphicon glyphicon-comment" aria-hidden="true" style="
                    padding-left: 710px;"></span>12 K
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 5
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>12 V

                
                </div>


              </div>

             
              </div> 
               
            
            
    
        </div> 
       
        

    