<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<?php 


?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
                <style>


body  {
 background-image: url('images/background.png');
  background-color: #cccccc;
  opacity: 0.9;
  

 h1 { color: #FDFDFD; }
 
 h1{

position: relative;

left: 40%;

}
  h3 { color: white; }
  
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
}

h4{
    color:white;
    text-align: right;
}


  
 

  
 
</style>

<br>
<a href='logout.php' style='float:right;'  >
    <img src = " images/logout.png" width='50' length='50' class="center"   />
</a>
<br><br>
<h4>Logout</>

</td></tr>
<?php
require_once 'connection.php';
session_start();

if(isset($_SESSION['isloggedin'])
&& $_SESSION['isloggedin']==1)
{
    
 echo "<br><br><br>";
echo "<center><h1 style='color:white'; style='text-align:center'; >Welcome ".$_SESSION['username'];

echo "</h1> </center>";
//style='float:center;'
//style='text-align:center'

 //echo "<a href='logout.php' style='float:right;'  >Logout</a>";
#$query = "SELECT * FROM `movie` ";
#$result = $con->query($query);
#$r = $result->num_rows;

}
else {
    header('location:index.php');}
    
    ?>

<center></>
<br><br>

     

    
 <a href='profile.php'; style='float:center'; class="center" >
               <img src = "images/profile.png" width='200' length='500'  class="center""/> </a>
               
               <br><br>
          
                
                
                
                <br><br>
                
                
 <a href ='makeOrder.php';  class='center';>
                <img src = " images/makeOrder.png" width='500' length='400' class="center"   /> </a>
        
    
    
    

<?php

/*echo '<form action="movie.php" method="POST">';
echo '<ul>';
for ($j=0; $j<$r; $j++){
    $fetched_row = $result->fetch_assoc();
    $t = $fetched_row['title'];
    $mi = $fetched_row['movieId'];
    echo "<img src='images/image".$fetched_row['movieId'].".jpg' width='100' height='100' />";
    echo "<br><input type='radio' name='n' value = '$mi'/>";
    echo " <font color=white> $t";
    echo '<br><br>';
 

    
}
 * 
 */
/*echo '<input type="submit"/>
</form>';
 * 
 */
?>
    </table>
    </body>
</html>