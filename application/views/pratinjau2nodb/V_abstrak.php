<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
<body>
<div>
<?php echo $this->session->userdata('abstrak'); ?>
<p>Kata Kunci : <?php echo $this->session->userdata('katakunci'); ?></p>

</div>
  
</body>
</html>