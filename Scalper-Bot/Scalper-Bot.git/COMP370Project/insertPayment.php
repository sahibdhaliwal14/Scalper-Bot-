<?php
require_once 'connection.php';
if ( isset($_POST['creditcardnum']) && isset($_POST['cardname'])&& isset($_POST['ccv'])&& isset($_POST['expdate'])&& isset($_POST['cardtype']))
        {
            $cnum= $_POST['creditcardnum'];
            $cname= $_POST['cardname'];
            $ccv= $_POST['ccv'];
            $exp= $_POST['expdate'];
            $ct = $_POST['cardtype'];
            

            
// add values to the db to the table professor

$sql_add_query = "INSERT INTO `payment`(`creditCardNumber`, `CardName`, `CCV`, `EXPDate`,`CardType`) VALUES ('$cnum','$cname','$ccv','$exp','$ct')";
        if($con->query( $sql_add_query) === FALSE){ die("Could not add the new professor");}
}
header('location:profile.php');



        
       
        
     ?>