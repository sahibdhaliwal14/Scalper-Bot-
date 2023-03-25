<?php
require_once 'connection.php';
if ( isset($_POST['add']) && isset($_POST['city'])&& isset($_POST['prov'])&& isset($_POST['country'])&& isset($_POST['postCode']))
        {
            $add= $_POST['add'];
            $city= $_POST['city'];
            $prov= $_POST['prov'];
            $count= $_POST['country'];
            $post = $_POST['postCode'];
            

            
// add values to the db to the table professor

$sql_add_query = "INSERT INTO `shipping`(`address`, `city`, `province`, `country`,`postalCode`) VALUES ('$add','$city','$prov','$count','$post')";
        if($con->query( $sql_add_query) === FALSE){ die("Could not add the new professor");}
}
header('location:profile.php');



        
       
        
     ?>