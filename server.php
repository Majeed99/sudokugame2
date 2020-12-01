<?php
$errors = array();
$db = mysqli_connect("localhost" , "root" , "" , "Sudoku");

if(isset($_POST['btn'])) {
    session_start();
    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $password2 = $_POST['password2'];

    // check if empty

    if (empty($username)) { array_push($errors, "Username is required"); }

    if (empty($email)) { array_push($errors, "Email is required"); }

    if (empty($password)) { array_push($errors, "Password is required"); }

    if (empty($password2)) { array_push($errors, "Confirm Password is required"); }

    if ($password != $password2) {
        array_push($errors, "The two passwords do not match");
    }
    // check if user already taken

    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $users = mysqli_fetch_assoc($result);

    if ($users) { // if user exists
        if ($users['username'] === $username) {
            array_push($errors, "Username already exists");
        }

    }

// if no error then add

    if (count($errors) == 0) {
        $sql = "INSERT INTO users (username, email, password)VALUES('$username','$email','$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        mysqli_close($db);

        header("location:ExpertCheck.php");
    }


}
?>