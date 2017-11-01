 <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/img/logosip.png'); ?>" alt="" width="125" hight="25" style="padding-top: 8px;border-left-width: 20px;margin-left: 20px;">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <form action="<?php echo site_url('web/pencarian'); ?>" method="get">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                    <li style=" margin-left: 15px;" >
                     <select name="kategori" class="form-control" style="margin-top: 8px;">
                     <option value="">Pilih Kategori</option>
                     <?php $datakategori = $this->db->get('kategori')->result_array(); ?>

                     <?php foreach ( $datakategori as $key  ) { 
                      
                          if ($this->input->get('kategori') == $key['id_kategori']) { ?>
                           <option selected value='<?php echo $key['id_kategori'] ?>' ><?php echo $key['nama_kategori'] ?></option>
                          <?php }
                          else { ?>
                          <option value='<?php echo $key['id_kategori'] ?>' ><?php echo $key['nama_kategori'] ?></option>
                          <?php }
                          
                     } ?>
                    </select>   
                    </li>



                    <li style="margin-top: 7px;">
                         <input style="margin-left: 25px;" class="form-control" type="text" name="cari" value="<?php echo $this->input->get('cari'); ?>"
                         placeholder="cari" >
                    </li>
                        
                    <li style="margin-top: 7px;">
                        <span >
                        <button class="btn btn " type="submit"    >
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </li>
                   
                 </ul>
             <ul class="nav navbar-nav navbar-right">


                    <li>
                         <a href="#"><span class="glyphicon glyphicon-home"></span></a>
                    </li>

                     <li>
                        <?php  $iduser = $this->session->userdata('id') ?>
                         <?php $queryuser = $this->db->get_where('user',array('id_user'=>$iduser))->row(); ?>
                         <?php if ($queryuser->level == 'redaksi') { ?>
                             <a href="<?php echo site_url('web/redaksi'); ?>"><span class="glyphicon glyphicon-th"></span></a>
                         <?php } else { ?>
                         <a href="<?php echo site_url('web/dasboard'); ?>"><span class="glyphicon glyphicon-th"></span></a>
                           <?php } ?>
                    </li>


                    



                     <li>
                        <a><span class="glyphicon glyphicon-option-vertical"></span></a>
                    </li>
                    <li>
                          <?php  $iduser = $this->session->userdata('id') ?>
                         <?php $queryfoto = $this->db->get_where('user',array('id_user'=>$iduser))->row(); ?>
                        <img alt="" data-src="" class="img-circle" src="<?php echo base_url('assets/img/fotoprofil/'.$queryfoto->foto ) ; ?>" data-holder-rendered="true" style="width: 25px;height: 25px;padding-top: 0px;border-bottom-width: 10px;padding-bottom: 0px;margin-bottom: 0px;margin-top: 10px;">
                    </li>
                    
                    <li>
                          <?php  $iduser = $this->session->userdata('id') ?>
                         <?php $queryfoto = $this->db->get_where('user',array('id_user'=>$iduser))->row(); ?>
                        <a ><?php echo $queryfoto->username ; ?></a>
                    </li>

                    <li>
                         <a href=" <?php echo site_url('web/logout') ?>"class="glyphicon glyphicon-log-out" ></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </form>
        </div>
        <!-- /.container -->
    </nav>