<div class="container">
<?php
$attributes = array('class' => 'form-signin');?>
<fieldset>
<legend> Personal Information </legend>
<?php
echo form_open('login/create_member',$attributes);?>
<h1 class="form-signin-heading"> Create an Account </h1>
<?php
$data = array(
              'name'        => 'first_name',
              'class' => 'form-control',
              'placeholder' => 'First Name',
            );
echo form_input($data);

$data = array(
              'name'        => 'last_name',
              'class' => 'form-control',
              'placeholder' => 'Last Name',
            );
echo form_input($data);

$data = array(
              'name'        => 'email_address',
              'class' => 'form-control',
              'placeholder' => 'Email Address',
            );
echo form_input($data);

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
              'name'        => 'password1',
              'class' => 'form-control',
              'placeholder' => 'Confim Password',
              
            );
echo form_password($data);

$data = array(
              'name'        => 'Submit',
              'class'=> "btn btn-lg btn-primary btn-block", 
              'value'          => 'Create Account',
              
            );

echo form_submit($data);
echo validation_errors('<p class="error">');?>
</fieldset>
</div>

