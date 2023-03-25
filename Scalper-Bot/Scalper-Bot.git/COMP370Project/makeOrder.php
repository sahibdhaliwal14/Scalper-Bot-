<br>
<a href='logout.php' style='float:right;'  >
    <img src = " images/logout.png" width='50' length='50' class="center"   />
</a>

<a href='homepage.php' style='float:left;'  >
    <img src = " images/home.png" width='50' length='50' class="center"   />
</a>

<h4 style='text-align: right'>Logout  </>
<h4 style='text-align: left'>Home Page</>


    
    



    




<center><H1> Choose the size and colour way</H1></>
<style>
    body  {
  background-image: url('images/background.png');
  background-color: #cccccc;
  
    }
    
     h1 { color: #FDFDFD; }
     
     a href{ color: #FDFDFD;
     float: right;}
     
     h4{
         color:white;
         
     }
     
     h3 {color: #FDFDFD;}
     
     h5 {color: #FDFDFD;}
     
     h2{ color:white;
         text-align: right;
     }
     
   table{
       color:#FFFFE0;
   }
      //<table style="background-color:#FFFFE0;">
      
     
     
     
  .pay-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  background-image: linear-gradient(to right, #bdc3c7 0%, #2c3e50 100%);
}
.pay-text {
  top: 112px;
  left: 726px;
  position: absolute;
}
.pay-select {
  top: 303px;
  left: 958px;
  position: absolute;
}
.pay-text1 {
  top: 513px;
  left: 771px;
  position: absolute;
}
.pay-text2 {
  top: 441px;
  left: 771px;
  position: absolute;
}
.pay-text3 {
  top: 372px;
  left: 771px;
  position: absolute;
}
.pay-text4 {
  top: 304px;
  left: 772px;
  position: absolute;
}
.pay-textinput {
  top: 363px;
  left: 955px;
  position: absolute;
}
.pay-textinput1 {
  top: 505px;
  left: 952px;
  position: absolute;
}
.pay-textinput2 {
  top: 434px;
  left: 953px;
  position: absolute;
}
.pay-textinput3 {
  top: 582px;
  left: 948px;
  position: absolute;
}
.pay-text5 {
  top: 587px;
  left: 769px;
  position: absolute;
}
.pay-navlink {
  top: 687px;
  left: 1122px;
  position: absolute;
  text-decoration: none;
}
    
</style>




 
 <br><br><br>







 <center>


<form action="insertOrderInfo.php" method="POST">



 
 <?php
 
 session_start();


if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1)
{
    require_once 'connection.php';
    $query = "SELECT * FROM `orderinfo`";
    $result = $con->query($query);
    $r = $result->num_rows;
    
}

 else {
    header('location:index.php'); //this is just a test to make sure it works 
}
 if ($r == 0){
    echo "<h3>No order information yet please add below</>";
}

else {


echo "<table border='1'>
    <tr><th>Size </th> <th> Colour Way</th> <th> Quantity</th>  <th> Delete </>
        </tr>";

}

       for($j=0; $j<$r; $j++){
        $fetched_row= $result->fetch_assoc();
        $size= $fetched_row['size'];
    //    $cname=$fetched_row['CardName'];
        $colour= $fetched_row['colour'];
        $quantity= $fetched_row['quantity'];
        
      
        
                echo "<br>";
     
        echo"<tr><td>$size</td>  <td>$colour</td> <td>$quantity</td>  "
                . "  <td><a href='deleteOrderInfo.php?i=$size'>X</a>";
        // <td>$cname</td>
        echo "</tr>";
        
        echo "</table>";
        
       }
 
 
 
 
 ?>
 
    <br> 
<input type="text" name="size" placeholder="Size EG.5,6,7,8"/><br><br>
<input type="text" name="colour" placeholder="Colour EG. red,blue,black"/><br><br>
<input type="text" name="quantity" placeholder="Quantity EG:1,2,3,4"/><br><br>
<input type="submit" name="UPDATE" value="UPDATE"/>
</form>

<br><br><br>

<h3>Make sure to create a shipping and payment profile before ordering!</> <br>
 <a href='completeOrder.php'>
               <img src = "images/completeOrder.png" width='200' length='100' class='center' /> </a>
               
               





 </center>