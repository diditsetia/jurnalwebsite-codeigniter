 <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                 <hgroup>
                <div class="sb-toggle-left navbar-left" style="margin-top: 33px; margin-left: 20px;
                    margin-right: 15px;">
                <div class="navicon-line"></div>
                <div class="navicon-line"></div>
                <div class="navicon-line"></div>
            </div>
      
            </hgroup>
            <div class="navbar-header">


                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/img/logosip.png'); ?>" alt="" width="150" hight="50" style="padding-top: 6px;border-left-width: 20px;margin-left: 20px;">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            


                <ul class="nav navbar-nav navbar-right">

                    <li>
                         <a href=""><span class="glyphicon glyphicon-file"></span></a>
                    </li>

                    <li>
                         <a href="<?php echo site_url('web/pembaca'); ?>"><span class="glyphicon glyphicon-home"></span></a>
                    </li>

                     <li>
                         <?php  $iduser = $this->session->userdata('id') ?>
                         <?php $queryuser = $this->db->get_where('user',array('id_user'=>$iduser))->row(); ?>
                         <?php if ( $queryuser->level == 'redaksi') { ?>
                              <a href="<?php echo site_url('web/redaksi'); ?>"><span class="glyphicon glyphicon-th"></span></a>
                        <?php } else { ?>
                                <a href="<?php echo site_url('web/dasboard'); ?>"><span class="glyphicon glyphicon-th"></span></a>
                        <?php  } ?>
                         
                    </li>

                    



                     <li>
                        <a><span class="glyphicon glyphicon-option-vertical"></span></a>
                    </li>
                    <li>
                          <?php  $iduser = $this->session->userdata('id') ?>
                         <?php $queryfoto = $this->db->get_where('user',array('id_user'=>$iduser))->row(); ?>
                        <img alt="" data-src="" class="img-circle" src="<?php echo base_url('assets/img/fotoprofil/'.$queryfoto->foto); ?>" data-holder-rendered="true" style="width: 25px;height: 25px;padding-top: 0px;border-bottom-width: 10px;padding-bottom: 0px;margin-bottom: 0px;margin-top: 10px;">
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
        </div>
        <!-- /.container -->
    </nav>