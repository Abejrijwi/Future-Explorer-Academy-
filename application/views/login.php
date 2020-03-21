<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/fontawesome/css/all.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/admin/css/main.css">
    <title>Login - FEA</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
<!--         <h1>FEA</h1> -->
      </div>
      <div class="login-box">




   <?php
            if ($this->session->flashdata('msg')) {
                ?>
                <div class="alert alert-info"><?php echo $this->session->flashdata('msg'); ?></div>                
                <div class="clearfix"></div>
                <?php
            }
            ?>


      <form class="login-form" action="<?php echo site_url('Login/processing'); ?>" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="email" name="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <input type="submit" value="SIGN IN" name="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>
            <!-- <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button> -->
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>



              <!--   <form action="<?php echo site_url('Login/processing'); ?>" method="post">
                      <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-8">
                          <input type="email" name="email" class="form-control form-control-sm" placeholder="Email">
                        </div>
                      </div>

                        <div class="form-group row">
                        <label class="col-sm-4 col-form-label col-form-label-sm">Password</label>
                        <div class="col-sm-8">
                          <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
                        </div>
                      </div>
                    <input type="submit" value="Sign in" name="submit" class="btn btn-primary btn-sm btn-block">
                    <small class="form-text text-center"> Not a member? <a href=""> Register </a></small>
                </form>
 -->








  </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>