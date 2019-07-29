<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('recursos-panel/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('recursos-panel/');?>css/sb-admin.css" rel="stylesheet">

</head>

<body background="<?php echo base_url('recursos-panel/');?>img/3.jpg">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php
                    $form = array('class'=>'form-group');
                    echo form_open(base_url('index.php/usuario/login/validar'),$form);
                     ?>
                    <div class="form-group">
                      <?php
                      $correo=array(
                      'type'=>'email',
                      'class'=>'form-control',
                      'id'=>'inputEmail',
                      'name'=>'email',
                      'placeholder'=>'Email Address',
                      'required'=>'required',
                      'autofocus'=>'autofocus'
                      );
                      echo form_input($correo);
                      ?><!--end correo-->
                      <?php
                      echo form_open('');
                       ?>
                      <div class="form-group">
                        <?php
                        $pass=array(
                        'type'=>'password',
                        'name'=>'password',
                        'class'=>'form-control',
                        'id'=>'InputPassword',
                        'placeholder'=>'Password',
                        'required'=>'required'
                        );
                        echo form_input($pass);
                        ?>  <!--end password-->
                        <?php
                        echo form_open('');
                         ?>
                        <div class="form-group">
                            <div class="checkbox">
                          <?php
                          $checkbox=array(
                          'type'=>'checkbox',
                          'value'=>'remember-me'
                          );
                          echo form_checkbox($checkbox);
                          ?> <!--end checkbox -->
                      <!-- <input type="checkbox" class="custom-control-input" id="customCheck"> -->
                      <?php
                      $label=array(
                      'class'=>'custom-control-label'
                      );
                      echo form_label('Remember Me','customCheck',$label);
                      ?>
                      </div>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
        <!--<form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.html">Login</a>
        </form>-->
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('recursos-panel/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('recursos-panel/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('recursos-panel/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
