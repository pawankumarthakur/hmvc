<!DOCTYPE html>
<html>
<head>
	<title> Blogger </title>
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.theme.css">
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/script.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/owl.carousel.js"></script>
	<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});
</script>
<script>
function signin(){
	alert("Sign In Button Clicked");
}
</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog</a>
        </div>
		<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url()?>home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="<?php echo base_url()?>contact">Contact</a></li>
          </ul>
        
          <?php
$attributes = array('class' => 'navbar-form navbar-right');
echo form_open('login/validate_cred_head',$attributes);?>
<div class="form-group">
<?php
$data = array(
              'name'        => 'username1',
              'class' => 'form-control',
              'placeholder' => 'Username',
            );
echo form_input($data);?>
</div>
<div class="form-group">
<?php $data = array(
'name'        => 'password1',
'class' => 'form-control',
'placeholder' => 'Password',
);
echo form_password($data); ?>
</div>
<?php $data = array(
              'name'        => 'Submit',
              'class'=> "btn btn-success", 
              'value'          => 'Sign In',
			  'onclick' => 'signin()',
            );
echo form_submit($data);?>            
			<a href="<?php echo base_url()?>login/signup" class="btn btn-success">Sign Up</a>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


