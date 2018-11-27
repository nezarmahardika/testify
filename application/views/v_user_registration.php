

<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head> -->
  <body class="bg-dark">
    <div class="container">
      <div class="card mx-auto mt-5">
        <div class="card-header" align="middle">Testify</div>
        <label>
          <a href="<?php echo site_url('Login/index') ?>" style="color:red;">Back To Login</a>
        </label>
        <div style="width:100%;">
          <div style="float:left; width:50%;">
        <div class="card-body">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h4>User Registration Form</h4>
              </div>
              <div class="panel-body">
                  <?php $attributes = array("name" => "registrationform");
                  echo form_open("user/register", $attributes);?>

                  <div class="form-group">
                      <label for="name">ID</label>
                      <input class="form-control" name="UserID" placeholder="Your ID" type="text" value="<?php echo set_value('UserID'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserID'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="name">Full Name</label>
                      <input class="form-control" name="UserFullName" placeholder="Your Full Name" type="text" value="<?php echo set_value('UserFullName'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserFullName'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="name">Username</label>
                      <input class="form-control" name="UserName" placeholder="Username" type="text" value="<?php echo set_value('UserName'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserName'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="email">Email</label>
                      <input class="form-control" name="UserEmail" placeholder="Email" type="text" value="<?php echo set_value('UserEmail'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserEmail'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="email">Phone Number</label>
                      <input class="form-control" name="UserPhone" placeholder="Phone Number" type="text" value="<?php echo set_value('UserPhone'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserPhone'); ?></span>
                  </div>
                </div>
                </div>
                </div>
                </div>
                    <div style="float:right; width:50%;">
                  <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style="color:white;">hahaha</h4>
                        </div>
                        <div class="panel-body">
                  <div class="form-group">
                      <label for="email">Department</label>
                      <input class="form-control" name="UserDepartment" placeholder="Department" type="text" value="<?php echo set_value('UserDepartment'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserDepartment'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="email">Group</label>
                      <input class="form-control" name="UserGroup" placeholder="Group" type="text" value="<?php echo set_value('UserGroup'); ?>" />
                      <span class="text-danger"><?php echo form_error('UserGroup'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="email">Role</label>
                      <select class="selectpicker" name="RoleID" title="--Choose one--">
                          <option value="R02">Group Head</option>
                          <option value="R03">PM testing</option>
                          <option value="R04">PM Developer</option>
                          <option value="R05">PT Lead</option>
                          <option value="R06">SIT Lead</option>
                          <option value="R07">UAT Lead</option>
                          <option value="R08">SAT Lead</option>
                          <option value="R09">PTR Lead</option>
                      </select>
                      <!-- <input class="form-control" name="RoleID" placeholder="Role" type="text" value="<?php echo set_value('RoleID'); ?>" /> -->
                      <span class="text-danger"><?php echo form_error('RoleID'); ?></span>
                  </div>

                  <div class="form-group">
                      <label for="subject">Password</label>
                      <input class="form-control" name="Password" placeholder="Password" type="password" />
                      <span class="text-danger"><?php echo form_error('password'); ?></span>
                  </div>
                  <!-- <div class="form-group">
                      <label for="subject">Confirm Password</label>
                      <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
                      <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
                  </div> -->

                  <div class="form-group" style="float:right;">
                      <button name="submit" type="submit" class="btn btn-default" style="background-color:blue;color:white;">Signup</button>
                      <button name="cancel" style="background-color:red;color:white;" type="reset" class="btn btn-default">Cancel</button>
                  </div>
                  <?php echo form_close(); ?>
                  <?php echo $this->session->flashdata('msg'); ?>
              </div>
          </div>
        </div>
      </div>
      </div>
        </div>
      </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
