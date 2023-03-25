<! DOCTYPE html>  
<html>  
<meta name="viewport" content="width=device-width, initial-scale=1">    
<meta charset="UTF-8">    
<title> Payment Order Form  </title>     
 </head>  
<style>  
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');  
body {  
  font-family: 'Roboto Condensed', sans-serif;  
  color: #262626;  
  margin: 5% 0;  
}  
.container {  
  width: 100%;  
  padding-right: 15px;  
  padding-left: 15px;  
  margin-right: auto;  
  margin-left: auto;  
}  
@media (min-width: 1200px)  
{  
  .container {  
    max-width: 1140px;  
  }  
}  
.d-flex {  
  display: flex;  
  flex-direction: row;  
  background: #f6f6f6;  
  border-radius: 0 0 5px 5px;  
  padding: 25px;  
}  
form {  
  flex: 4;  
}  
.Yorder {  
  flex: 2;  
}  
.title {  
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));  
  background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);  
  background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);  
  background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);  
  background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);  
  border-radius: 5px 5px 0 0 ;  
  padding: 20px;  
  color: #f6f6f6;  
}  
h2 {  
  margin: 0;  
  padding-left: 15px;   
}  
.required {  
  color: red;  
}  
label {  
  display: block;  
  margin: 15px;  
}  
table {  
  display: block;  
  margin: 15px;  
}  
label>span {  
  float: left;  
  width: 25%;  
  margin-top: 12px;  
  padding-right: 10px;  
}  
input[type="email"]  
{  
  width: 70%;  
  height: 30px;  
  padding: 5px 10px;  
  margin-bottom: 10px;  
  border: 1px solid #dadada;  
  color: #888;  
}  
select  
{  
  width: 70%;  
  height: 30px;  
  padding: 5px 10px;  
  margin-bottom: 10px;  
  border: 1px solid #dadada;  
  color: #888;  
}  
input[type="text"] {  
  width: 70%;  
  height: 30px;  
  padding: 5px 10px;  
  margin-bottom: 10px;  
  border: 1px solid #dadada;  
  color: #888;  
}  
input[type="tel"]   
{  
  width: 70%;  
  height: 30px;  
  padding: 5px 10px;  
  margin-bottom: 10px;  
  border: 1px solid #dadada;  
  color: #888;  
}  
select {  
  width: 72%;  
  height: 45px;  
  padding: 5px 10px;  
  margin-bottom: 10px;  
}  
.Yorder {  
  margin-top: 15px;  
  height: 600px;  
  padding: 20px;  
  border: 1px solid #dadada;  
}  
table {  
  margin: 0;  
  padding: 0;  
}  
th {  
  border-bottom: 1px solid #dadada;  
  padding: 10px 0;  
}  
tr>td:nth-child(1) {  
  text-align: left;  
  color: #2d2d2a;  
}  
tr>td:nth-child(2) {  
  text-align: right;  
  color: #52ad9c;  
}  
td {  
  border-bottom: 1px solid #dadada;  
  padding: 25px 25px 25px 0;  
}  
p {  
  display: block;  
  color: #888;  
  margin: 0;  
  padding-left: 25px;  
}  
.Yorder>div {  
  padding: 15px 0;   
}  
button {  
  width: 100%;  
  margin-top: 10px;  
  padding: 10px;  
  border: none;  
  border-radius: 30px;  
  background: #52ad9c;  
  color: #fff;  
  font-size: 15px;  
  font-weight: bold;  
}  
button:hover {  
  cursor: pointer;  
  background: #428a7d;  
}  
</style>  
<body>  
<div class="container">  
  <div class="title">  
      <h2> Payment Order Form </h2>  
  </div>  
<div class="d-flex">  
  <form action="" method="">  
    <label>  
      <span class="fname"> Card Holder Name <span class="required"> * </span></span>  
      <input type="text" name="cardName">  
    </label>  
      
      <label>  
      <span class="lname"> Credit Card Number <span class="required"> * </span> </span>  
      <input type="text" name="CCNum">  
    </label>  
      
      
    <label>  
      <span class="lname"> CCV <span class="required"> * </span> </span>  
      <input type="text" name="CCV">  
    </label>  
      
      <label>  
      <span class="lname"> Expiry Date <span class="required"> * </span> </span>  
      <input type="text" name="expDate">  
    </label>  
    
      
      <label>  
      <span class="lname"> Card Type <span class="required"> * </span> </span>  
      <input type="text" name="cardType">  
    </label>  

    
  </form>  
  <div class="Yorder">  
    <table>  
      <tr>  
        <th colspan="2"> Your order </th>  
      </tr>  
      <tr>  
        <td> Product Name x 1(Qty) </td>  
        <td> $200 </td>  
      </tr>  
      <tr>  
        <td> Subtotal </td>  
        <td> $224 </td>  
      </tr>  
      <tr>  
        <td> Shipping </td>  
        <td> Free shipping </td>  
      </tr>  
    </table><br>  
   
   
   
    <a href='confirmation.php'>  <button type="button" id="order" name="order"> Place Order </button>  </a>
  </div>  
 </div>  
</div>  
</body>  
</html>  