<?php
require_once 'connection.php';
if ( isset($_POST['size']) && isset($_POST['colour'])&& isset($_POST['quantity']) )
        {
            $size= $_POST['size'];
            $colour= $_POST['colour'];
            $quantity=$_POST['quantity'];
            
            

            
// add values to the db to the table professor

$sql_add_query = "INSERT INTO `orderinfo`(`size`, `colour` ,`quantity`) VALUES ('$size','$colour' ,'$quantity')";
        if($con->query( $sql_add_query) === FALSE){ die("Could not add the new professor");}
}
header('location:makeOrder.php');



        
       
        
     ?>