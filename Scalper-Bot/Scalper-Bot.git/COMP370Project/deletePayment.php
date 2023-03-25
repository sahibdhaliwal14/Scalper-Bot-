<?php

require_once 'connection.php';
if(isset($_GET['i'])){
    $cnum = $_GET['i'];
    //echo $ssn;
    $query = "Delete from payment where creditCardNumber='$cnum'";
    $con->query($query);
    header('location:profile.php');
}
?>