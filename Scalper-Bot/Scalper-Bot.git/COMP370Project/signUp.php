<br><br><br>
<H1 style="text-align: center" > Create your new Account</H1>
<style>
    body  {
  background-image: url('images/background.png');
  background-color: #cccccc;
    }
    
     h1 { color: #FDFDFD; }
     
 .signup-container {
  width: 100%;
  display: flex;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  background-image: linear-gradient(to right, #c2e59c 0%, #64b3f4 100%);
}
.signup-text {
  top: var(--dl-space-space-sixunits);
  left: 425px;
  position: absolute;
  align-self: center;
}
.signup-textinput {
  top: 399px;
  left: 508px;
  position: absolute;
}
.signup-text1 {
  top: 507px;
  left: 380px;
  position: absolute;
}
.signup-text2 {
  top: 457px;
  left: 380px;
  position: absolute;
}
.signup-text3 {
  top: 407px;
  left: 380px;
  position: absolute;
}
.signup-textinput1 {
  top: 447px;
  left: 508px;
  position: absolute;
}
.signup-textinput2 {
  top: 399px;
  left: 508px;
  position: absolute;
}
.signup-textinput3 {
  top: 546px;
  left: 510px;
  position: absolute;
}
.signup-textinput4 {
  top: 495px;
  left: 509px;
  position: absolute;
}
.signup-text4 {
  top: 557px;
  left: 380px;
  position: absolute;
}
.signup-navlink {
  top: 613px;
  left: 679px;
  position: absolute;
  text-decoration: none;
}
    
</style>

<form action="insert.php" method="POST" style="text-align: center" >
    <input type="text" name="name" placeholder="Full Name"/><br><br>
<input type="text" name="user" placeholder="username"/><br><br>
<input type="password" name="pass" placeholder="password"/><br><br>
<input type="email" name="email" placeholder="Email Address"/><br><br>
<input type="submit" value="Create Account"/>
</form>