<?php include('check_signin.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="signin_changePass_style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.13.0-web/css/all.css">
    <title>Sign In</title>
</head>
<body>
<div class="d-flex justify-content-center h-100">
    <div class="card">
        <div class="card-header">
            <p class="title ">Sign In</p>
        </div>
        <div class="card-body">
            <form class="form-signin" method="post" action="signin.php">
                <?php include('errors.php') ?>
                <div class="input-group form-group w-100">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control username" name="username" placeholder="Username" >

                </div>
                <div class="input-group form-group w-100">
                    <div class="input-group-prepend">
                        <span class="input-group-text password"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" >
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" name="login_btn" class="btn float-right btn-lg  w-50 login_btn">
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center links">
                Don't have an account? <a href="Signup.php"> Sign Up</a>
            </div>
            <div class="d-flex justify-content-center links">
                <a href="change_password.php">Forgot your password?</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>