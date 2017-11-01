<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	</head>
<body>
<?php echo $this->session->userdata('pendahuluan'); ?>
<?php echo $this->session->userdata('kajianpustaka'); ?>
<?php echo $this->session->userdata('landasanteori'); ?>
<?php echo $this->session->userdata('metodepenelitian'); ?>
<?php echo $this->session->userdata('pembahasan'); ?>
<?php echo $this->session->userdata('penutup'); ?>
</body>
</html>