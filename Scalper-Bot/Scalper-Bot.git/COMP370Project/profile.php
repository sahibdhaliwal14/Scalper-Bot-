<br>
<a href='logout.php' style='float:right;'  >
    <img src = " images/logout.png" width='50' length='50' class="center"   />
</a>

<a href='homepage.php' style='float:left;'  >
    <img src = " images/home.png" width='50' length='50' class="center"   />
</a>

<h4 style='text-align: right'>Logout  </>
<h4 style='text-align: left'>Home Page</>


    
    



    




<center><H1> Create or update your profile</H1></>
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


<form action="insertPayment.php" method="POST">
<h4 style="color:white">Update Payment Profile </>

 <h5> NOTICE: Please remove your current payment profile before updating</h5>
 
 <?php
 
 session_start();


if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1)
{
    require_once 'connection.php';
    $query = "SELECT * FROM `payment`";
    $result = $con->query($query);
    $r = $result->num_rows;
    
}

 else {
    header('location:index.php'); //this is just a test to make sure it works 
}
 if ($r == 0){
    echo "<h3>No payment profile yet! Please add below</>";
}

else {


echo "<table border='1'>
    <tr><th>Credit Card Number </th> <th> Credit Card Name</th> <th> CCV </th> <th> Exp Date </th> <th> Card Type </th> <th> Delete </>
        </tr>";

}

       for($j=0; $j<$r; $j++){
        $fetched_row= $result->fetch_assoc();
        $cnum= $fetched_row['creditCardNumber'];
    //    $cname=$fetched_row['CardName'];
        $ccv= $fetched_row['CCV'];
        $exp=$fetched_row['EXPDate'];
        $ct=$fetched_row['CardType'];
        
                echo "<br>";
     
        echo"<tr><td>$cnum</td>  <td>$ccv</td> <td>$exp</td> <td>$exp</td>"
                . " <td>$ct</td> <td><a href='deletePayment.php?i=$cnum'>X</a>";
        // <td>$cname</td>
        echo "</tr>";
        
        echo "</table>";
        
       }
 
 
 
 
 ?>
 
    <br> 
<input type="text" name="creditcardnum" placeholder="Credit Card Number"/><br><br>
<input type="text" name="cardname" placeholder="Card Name"/><br><br>
<input type="text" name="ccv" placeholder="CCV"/><br><br>
<input type="text" name="expdate" placeholder="Expiry Date"/><br><br>
<input type="text" name="cardtype" placeholder="Card Type: VISA,MASTERCard,VISA DEBT"/><br><br>
<input type="submit" name="UPDATE" value="UPDATE"/>
</form>

<br><br><br>





<form action="insertShipping.php" method="POST">
<h4 style="color:white">Update Shipping Profile </>
    <h5> NOTICE: Please remove your current shipping profile before updating</h5>
 
    <?php


if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==1)
{
    require_once 'connection.php';
    $query = "SELECT * FROM `shipping`";
    $result = $con->query($query);
    $r = $result->num_rows;
    
}

 else {
    header('location:index.php'); //this is just a test to make sure it works 
}
 if ($r == 0){
    echo "<h3>No shipping profile yet! Please add below</>";
}

else {


echo "<table border='1'>
    <tr><th>Address </th> <th> City</th> <th> Province </th> <th> Country </th> <th> Postal Code </th> <th> Delete </>
        </tr>";

}

       for($j=0; $j<$r; $j++){
        $fetched_row= $result->fetch_assoc();
        $add= $fetched_row['address'];
        $city=$fetched_row['city'];
        $prov= $fetched_row['province'];
        $count=$fetched_row['country'];
        $post=$fetched_row['postalCode'];
        
                echo "<br>";
     
        echo"<tr><td>$add</td>  <td>$city</td> <td>$prov</td> <td>$count</td>"
                . " <td>$post</td> <td><a href='deleteShipping.php?i=$add'>X</a>";
        // <td>$cname</td>
        echo "</tr>";
        
        echo "</table>";
        
       }


?>
    
    <br> <br>
<input type="text" name="add" placeholder="Address"/><br><br>
<input type="text" name="city" placeholder="City"/><br><br>
<input type="text" name="prov" placeholder="Province"/><br><br>
<input type="text" name="country" placeholder="Country"/><br><br>
<input type="text" name="postCode" placeholder="Postal Code"/><br><br>
<input type="submit" name="UPDATE" value="UPDATE"/>
</form>


 </center>