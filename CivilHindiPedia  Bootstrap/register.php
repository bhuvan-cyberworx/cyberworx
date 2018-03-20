<?php
include_once('INCLUDES/header.php');
?>

<?php
include_once('INCLUDES/menu.php');
?>
<div class="container-fluid">
  <div class="container">


    <div class="civil_register col-md-4 offset-md-4">
      <!-- <img src="IMAGES/logo-civil.png" class="text-center" alt=""> -->
      <h3 class="civil_authTitle">Register to CivilPedia with</h3>
      <div class="row col-md-12 civil_socialButtons">
            <div class="col-xs-12 col-sm-12 mb-4">
              <a href="#" class="btn btn-lg btn-block civil_btn-facebook">
                <i class="fa fa-facebook "></i>
                <span class="hidden-xs">Facebook</span>
              </a>
            </div>

            <div class="col-xs-12 col-sm-12">
              <a href="#" class="btn btn-lg btn-block civil_btn-google">
                <i class="fa fa-google-plus visible-xs"></i>
                <span class="hidden-xs">Google+</span>
              </a>
            </div>
      </div>

      <div class="row civil_row-sm-offset-3 civil_registerOr">
        <div class="col-xs-12 col-sm-6">
          <hr class="civil_hrOr">
          <span class="civil_spanOr">or</span>
        </div>
      </div>

      <div class="row ">
        <div class="col-xs-12 col-sm-12">
            <form class="civil_registerForm" action="" autocomplete="off" method="POST">
              <label for="inputUsernameEmail">Full Name</label>
              <div class="input-group">
                <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                <input type="text" class="form-control" name="username" >
              </div>
              <span class="help-block"></span>

              <label for="inputPassword">Email Address</label>
              <div class="input-group">
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="email" class="form-control" name="password" >
              </div>
              <span class="help-block"></span>

              <label for="inputPassword">10 Digit Mobile Number</label>
              <div class="input-group">
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="text" class="form-control" name="password" >
              </div>
              <span class="help-block"></span>

              <label for="inputPassword">Password</label>
              <div class="input-group">
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="password" class="form-control" name="password" >
              </div>
              <span class="help-block"></span>

              <label for="inputPassword">Confirm Password</label>
              <div class="input-group">
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="password" class="form-control" name="password" >
              </div>
              <span class="help-block"></span>




            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Register</button>
          </form>
        </div>
        </div>


      <p class="text-center  mar-b0">Need an account? <a class="ml-4 need-an-acount" href="login.php">Sign In</a></p>
    </div>




      </div>
</div>

<?php
include_once('INCLUDES/footer-menu.php');
?>

<?php
include_once('INCLUDES/footer.php');
?>
