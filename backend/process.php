<?php
require_once('connection.php');
session_start();
if (isset($_POST['Login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location:login.php?Empty= Please Fill in the Blanks");
    } else {
        $query = "select * from `user_profile` where username='" . $_POST['username'] . "' and password='" . sha1($_POST['password']) . "'";
        $result = mysqli_query($con, $query);

        if (mysqli_fetch_assoc($result)) {
            $_SESSION['User'] = $_POST['username'];
            header("location:todolist.php");
        } else {
            header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
        }
    }
} else {
    echo 'Not Working Now Guys';
}
