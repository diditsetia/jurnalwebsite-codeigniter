<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <title>Postingan Baru</title>
  
  <link rel="stylesheet" href=" <?php echo base_url('assets/asset_baca/css/layout.css'); ?>" type="text/css" media="screen" />
  <script src="<?php echo base_url('assets/asset_baca/js/hideshow.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/asset_baca/js/jquery.tablesorter.min.js'); ?>" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/asset_baca/js/jquery.equalHeight.js'); ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/asset_baca/css/bootstrap.min.css'); ?>">
  <!-- Slidebars CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/asset_baca/js/slidebars/slidebars.css'); ?>">
  <!-- Example Styles -->
  <link rel="stylesheet" href="<?php echo base_url('assets/asset_baca/css/sidebar.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/asset_baca/css/reader.css'); ?>">
   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/small-business.css') ?>" rel="stylesheet">

</head>

<style type="text/css">
        
        .sb-slidebar, header#header {
          background: #ffffff  no-repeat center fixed;
          box-shadow: 0px 0px 4px #A0A0A0;

          }

          #sidebar h3, #sidebar li a {
          color: #000;
          text-shadow: none;
          }


        .navbar-inverse {
            background-color: #ffffff;
             box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);
             border-color: #ffffff;






        }


        .navbar-inverse .navbar-nav>li>a:hover {
        color: #000; 
        }

        hr {
            margin-top: 5px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #dcdcdc;
        }

      

      footer{
  background-color: #56bca6;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  width: 100%;
  text-align: left;
  font: normal 16px sans-serif;

  padding: 45px 50px;
}

footer .footer-limiter {
  max-width: 880px;
  margin: 0 auto;
}

footer .footer-left p{
  color:  #000000;
  font-size: 14px;
  margin: 0;
}

/* Footer links */

footer p.footer-links{
  font-size:18px;
  font-weight: bold;
  color:  #000000;
  margin: 0 0 10px;
  padding: 0;
}

footer p.footer-links a{
  display:inline-block;
  line-height: 1.8;
  text-decoration: none;
  color:  inherit;
}

footer .footer-right{
  float: right;
  margin-top: 6px;
  max-width: 180px;
}

footer .footer-right a{
  display: inline-block;
  width: 35px;
  height: 35px;
  background-color:  #000000;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-left: 3px;
}


body {
     
    background-color: #f8f8f8;
}

.hero-spacer {
    margin-top: 50px;
}

.hero-feature {
    margin-bottom: 30px;
}

.navicon-line {
    width: 24px;
    height: 4px;
    border-radius: 1px;
    margin-bottom: 3px;
    background-color: #A9A9A9;
}



#sb-site, .sb-site-container {
    width: 100%;
    min-height: 100vh;
    position: relative;
    z-index: 1;
    background-color: rgba(255, 255, 255, 0);
}




       
    </style>


<body>


<?php
echo $navbar ;

?>

  <div class="container">
   <div class="singleton-element" style="position: absolute; top: 80px;
     right: -225px; width: 600px; height: 60px; margin: 0px; padding: 10px;
      font-size: 24px; text-align: center; color: rgb(255, 255, 255); 
      font-family: &quot;trebuchet ms&quot;, verdana, arial, sans-serif; 
      transform: rotate( 45deg); transform-origin: 50% 0px 0px; background-color: rgb(0, 0, 0);
       border: 1px solid rgb(170, 170, 170); opacity: 0.5; z-index: 1200;">Pratinjau</div>


  <div class="sb-slidebar sb-left">
    <!-- Your left Slidebar content. -->
    <?php
    echo $sidebar;

    ?>
   
    <!-- end of sidebar -->

  </div>
  
  <?php

  echo $konten;
  ?>
    
  
  
  </div>

  <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/asset_baca/js/jquery.min.js'); ?>"></script>

  <!-- Slidebars -->
  <script src="<?php echo base_url('assets/asset_baca/js/slidebars/slidebars.js'); ?>"></script>
  <script>
    (function($) {
      $(document).ready(function() {
        $.slidebars();
      });
    }) (jQuery);
  </script>

</body>

</html>