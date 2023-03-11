<?php
require_once('connection.php');
$user_name = $_POST['username'];
$pwd = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO user_profile(username, email, password) VALUES('$user_name','$email', SHA('$pwd'))";
$result = mysqli_query($con, $query);
mysqli_close($con);
header("location:login.php");
