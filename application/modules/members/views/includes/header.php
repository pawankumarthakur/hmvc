<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title> Dashboard </title>
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.theme.css">
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/script.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/owl.carousel.js"></script>
</head>
<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">My Profile</a></li>
                <li><a href="<?php echo base_url()?>members/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

</body>
</html>
