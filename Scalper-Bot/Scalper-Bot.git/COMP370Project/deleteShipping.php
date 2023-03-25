<?php

require_once 'connection.php';
if(isset($_GET['i'])){
    $add = $_GET['i'];
    //echo $ssn;
    $query = "Delete from shipping where address='$add'";
    $con->query($query);
    header('location:profile.php');
}
?>