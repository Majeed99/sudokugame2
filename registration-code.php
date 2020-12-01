<?php
require_once('connection.php');
$user = $email = $pass = '';

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$password = MD5($pass);

$sql = "INSERT INTO users (Username,Email,Password) VALUES ('$user','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: Signup.php");
}
else
{
    echo "Error :".$sql;
}
?>