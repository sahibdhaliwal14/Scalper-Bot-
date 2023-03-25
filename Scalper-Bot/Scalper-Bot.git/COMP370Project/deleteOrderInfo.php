<?php

require_once 'connection.php';
if(isset($_GET['i'])){
    $size = $_GET['i'];
    //echo $ssn;
    $query = "Delete from orderinfo where size='$size'";
    $con->query($query);
    header('location:makeOrder.php');
}
?>