<!-- Navigation -->

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
                    <img src="<?php echo base_url('assets/img/logosip.png') ;?>" alt="" width="150" hight="50" style="padding-top: 6px;border-left-width: 20px;margin-left: 20px;">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           <!--  <form action="<?php  site_url(); ?>" method="get"> -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <ul class="nav navbar-nav navbar-right">

                    <li>
                         <a href=""><span class="glyphicon glyphicon-file"></span></a>
                    </li>

                    <li>
                         <a href="<?php echo site_url('web')?>"><span class="glyphicon glyphicon-home"></span></a>
                    </li>

                     <li>
                        <a><span class="glyphicon glyphicon-option-vertical"></span></a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('web/login') ?>">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('web/register') ?>">Register</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
       <!--  </form> -->
        </div>
        <!-- /.container -->
    </nav>