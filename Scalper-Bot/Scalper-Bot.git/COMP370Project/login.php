<?php
require_once 'connection.php';
$u = $_POST['user'];
$p = $_POST['pass'];
$query = "SELECT * FROM `user`  "
. "where username='$u'"
        . " and ". "password='$p'";
$result = $con->query($query);
if(!$result || $result->num_rows==0){
    header('location:index.php');
}
else {
    session_start();
    $_SESSION['isloggedin']=1;
    $_SESSION['username']=$u;
    header('location:homepage.php');
}


?>