<?php
require_once 'connection.php';
if ( isset($_POST['name']) && isset($_POST['user'])&& isset($_POST['pass'])&& isset($_POST['name'])&& isset($_POST['email']))
        {
            $u= $_POST['user'];
            $p= $_POST['pass'];
            $e= $_POST['email'];
            $n= $_POST['name'];
   
            
// add values to the db to the table professor

$sql_add_query = "INSERT INTO `user`(`username`, `password`, `email`, `name`) VALUES ('$u','$p','$e','$n')";
        if($con->query( $sql_add_query) === FALSE){ die("Could not add the new professor");}
}
header('location:homepage.php');



        
        
        
     ?>