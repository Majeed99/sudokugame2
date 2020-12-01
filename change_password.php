<?php

session_start();
$db=mysqli_connect("localhost","root","","Sudoku");
if(isset($_POST["change_btn"])){
    $username= $_POST['username'];
    $password= $_POST['password'];


    $sql = "SELECT * FROM users WHERE username='$username' ";
    $result= mysqli_query($db,$sql);
    if(mysqli_num_rows($result) == 1){
        $update="update users set password ='$password' where username='$username'";
        mysqli_query($db,$update);

        $_SESSION['message'] = "the password changed";
        $_SESSION['username'] = $username;
        header("location: signin.php");
    }
    else{
        $_SESSION['message'] ="user not found";
    }
    mysqli_close($db);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="signin_changePass_style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.13.0-web/css/all.css">
    <title>Change password</title>
</head>
<body>
<div class="d-flex justify-content-center h-100">
    <div class="card">
        <div class="card-header">
            <p class="title">Change password</p>
        </div>
        <div class="card-body ">

            <form class="form-change" method="post" action="########">
                <!-- DO NOT FORGET ^^   -->
                <div class="input-group form-group">
                    <div class="input-group-prepend change">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control username" name="username" placeholder="Username" required="">

                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend change">
                        <span class="input-group-text password"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="New Password" required="">
                </div>



                    <input type="submit" value="Change" name="change_btn" class="btn  btn-lg  change_btn w-75 ">

            </form>
        </div>

        </div>
    </div>
</div>

</body>
</html>