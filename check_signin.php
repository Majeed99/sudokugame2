<?php
$errors = array();
session_start();
$db=mysqli_connect("localhost","root","","Sudoku");
if(isset($_POST["login_btn"])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }


    if (count($errors) == 0) {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        if (mysqli_num_rows($result) == 1) {
            header('location: index.php');
        } else {

            array_push($errors, "invalid input");

        }
        mysqli_close($db);
    }
}
?>
