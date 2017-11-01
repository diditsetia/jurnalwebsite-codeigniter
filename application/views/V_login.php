<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/small-business.css') ?>" rel="stylesheet">



	<form class="form-horizontal" action="<?php echo site_url("web/login")?> " method="post" style="margin-top:55px; margin-left: 250px;">
    <div class="form-group">
              <div  class="col-sm-3 ">
                 <img src="<?php echo base_url('assets/img/gambarlogin.png') ;?>" alt="" width="450" hight="200" >
              </div>
              <div class="col-md-6" style=" margin-top: 50px;">
             <div class="form-group">
   
   <label for="username" class="col-sm-offset-6 col-sm-3">
    <a href="<?php echo site_url('web') ?>">
       <img src="<?php echo base_url('assets/img/logosip.png') ;?>" alt="" width="150" hight="50" >
     </a>
    </label>
  </div>
  
  <div class="form-group">
    
    <label for="username" class="col-sm-6 control-label">
      Username
    </label>
    <div class="col-sm-6">
      <input type="username" class="form-control" id="inputusername" required name="username" placeholder="username">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-6 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="password" name="password" required  placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-3">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
    
  </div>

  <div class="form-group">
    <div class="col-sm-offset-6 col-sm-6">
      <?php echo $this->session->flashdata('sukses'); ?>
    </div>
  </div>
  </div>
              
   
   
   
  </form>


  <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>
</html>