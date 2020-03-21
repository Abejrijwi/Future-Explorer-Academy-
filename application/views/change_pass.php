
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body class="alert alert-warning"><br><br><br><br>
    <div class="container col-md-3">

          <?php
            if ($this->session->flashdata('msg')) {
                ?>
                <div class="alert alert-info"><?php echo $this->session->flashdata('msg'); ?></div>                
                <div class="clearfix"></div>
                <?php
            }
            ?>


        <div class="card">
            <div class="card-header text-center">
                <h5>Admin Login</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('Login/processing'); ?>" method="post">
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
            </div>
        </div>
    </div>
</body>

</html>
