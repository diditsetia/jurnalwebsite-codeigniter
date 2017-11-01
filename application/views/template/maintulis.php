<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Menulis</title>

    <!-- Bootstrap Core CSS -->
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

footer {
    margin: 50px 0;
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
     

     




    

   

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- text editor -->
<script src="<?php echo base_url() ?>assets/vendor/summernote/summernote.js"></script>
<script>
  $(document).ready(function() {
      $('#summernote1').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

       $('#summernote2').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });


        $('#summernote3').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

        $('#summernote4').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

        $('#summernote5').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

        $('#summernote6').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

        $('#summernote7').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

        $('#summernote8').summernote({
        height: 420,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });

      $('#summernote9').summernote({
        height: 50,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null
      });  
  });
</script>

</body>

</html>
