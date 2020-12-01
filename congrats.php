<?php
session_start();
if (!isset($_SESSION['username']))
    header('location:signin.php?error=Please login again!');

$db=mysqli_connect("localhost","root","","Sudoku");
$username= $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$username' ";
$result= mysqli_query($db,$sql);
if(mysqli_num_rows($result) == 1) {
    $update = "update users set rankEasy=rankEasy+1 where username='$username'";
    mysqli_query($db, $update);
    header('location: index.php');
}
mysqli_close($db);


?>


