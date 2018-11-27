<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head> -->
  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header" align="middle">Testify</div>
        <div class="card-body">
          <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <label>
              <a href="<?php echo site_url('user/index') ?>">Register</a>
            </label>
          </form>
        </div>
        </div>
      </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
