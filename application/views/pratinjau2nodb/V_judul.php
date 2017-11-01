<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

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
<body>	


			 <div class="col-lg-12" style="text-align: center; justify; text-indent: 0.2in; font-size: 1.3em;">
			 <?php echo $this->session->userdata('judul'); ?>
			 </div>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.1in; font-size: 1.3em;">
            <?php 
            echo  $this->session->userdata('namapenulis').','.$this->session->userdata('nomerinduk');
            ?>
            </div>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $this->session->userdata('programstudi').','.$this->session->userdata('fakultas');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $this->session->userdata('universitas');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $this->session->userdata('alamat');
            ?>
            </div>
              <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            <?php 
            echo  $this->session->userdata('email');
            ?>
            </div>
            <br>
            <div class="col-lg-12" style="text-align: center ; justify; text-indent: 0.2in; font-size: 1.3em;">
            	<?php echo "ABSTRAK"; ?>
            </div>

           

</body>
</html>