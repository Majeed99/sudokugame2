<?php include('server.php') ?>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Sign Up</title>


    <link rel="stylesheet" type="text/css" href="SignupStyle.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.13.0-web/css/all.css">

  </head>


  <body>

  <div class="d-flex justify-content-center h-100">
  <div class="card">

      <div class="card-header">
          <p class="title">Sign up</p>
      </div>



  <div class="card-body">
      <?php include('errors.php') ?>
  <form class="form-signup" method="post" action="Signup.php" >

      <div class="input-group form-group mb-5">
      <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
  <input type="text" name="username" id="inputName" class="form-control" placeholder="Username" required="" autofocus="" >
      </div>


      <div class="input-group form-group mb-5">

          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
      </div>


      <div class="input-group form-group mb-5">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      </div>


      <div class="input-group form-group mb-5">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
  <input type="password" name="password2" id="inputPassword" class="form-control" placeholder="Confirm Password" required="">
      </div>




      <input class=" btn btn-lg   w-50 " name= "btn" type="submit" value="Sign up">




      <div class="card-footer">
          <div class="d-flex justify-content-center links">
             <p class="Haveacc">Have an account?</p>  &nbsp; &nbsp;  <a href="signin.php" class="Sin"> Sign in</a>
          </div>
      </div>

  </form>

  </div>


  </div>
  </div>



</body>
</html>