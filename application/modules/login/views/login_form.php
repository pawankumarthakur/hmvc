<div class="container">
<div class="row">
<?php
$attributes = array('class' => 'form-signin');
echo form_open('login/validate_cred',$attributes);?>
<h1 class="form-signin-heading"> Log-in </h1>
<?php
$data = array(
              'name'        => 'username',
              'class' => 'form-control',
              'placeholder' => 'Username',
            );
echo form_input($data);
$data = array(
              'name'        => 'password',
              'class' => 'form-control',
              'placeholder' => 'Password',
              
            );
echo form_password($data);
$data = array(
              'name'        => 'Submit',
              'class'=> "btn btn-lg btn-primary btn-block", 
              'value'          => 'Login Now',
              
            );

echo form_submit($data);
echo anchor('login/module_load', 'Create Account');
?>
</div>
</div>
