<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/small-business.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/summernote/summernote.css" rel="stylesheet">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  

    <style type="text/css">

    .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    overflow-x: hidden;
  }
   .ui-autocomplete {
    height: 100px;
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
  background-color: #77c7c3;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  width: 100%;
  height: 70px;
  text-align: left;
  font: normal 16px sans-serif;

  padding: 0px 0px;
}

footer .footer-limiter {
  max-width: 880px;
  margin: 0 auto;
}

footer .footer-left p{
  color:  #ffffff;
  font-size: 14px;
  margin: 0;
}

/* Footer links */

footer p.footer-links{
  font-size:18px;
  font-weight: bold;
  color:  #ffffff;
  margin: 0 0 0px;
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
  margin-top: 0px;
  max-width: 180px;
}

footer .footer-right a{
  display: inline-block;
  width: 35px;
  height: 35px;
  
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

footer {
    margin: 0px 0;
}



       
    </style>


</head>

<body>
  

    <!--navbar-->
    
  <?php 
  /*
   * Variabel $headernya diambil dari libraries template.php
   * (application/libraries/template.php)
   * */
  echo $navbar; ?>
    


    <!-- Page Content -->
    
    <?php 

    echo $konten;
    ?>
            
    
        

    <br>
    <br>
    <br>
    
    

     <!--footer-->
     <?php
     echo $footer;
     ?>

     


    

    <!-- jQuery -->
    <script type="text/javascript"> var site_url= "<?php echo site_url(); ?>";</script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/script.js'); ?>"></script>
    <script src="<?=base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- text editor -->

<!-- Auto Complete Search  -->
 

<!--End Autocomplete Search  -->
</body>

</html>
