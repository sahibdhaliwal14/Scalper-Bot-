<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
    
    <style>
        
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

body  {
  background-image: url('images/background.png');
  background-color: #cccccc;
  
}
 h1 { color: #FDFDFD; }
  h3 { color: #FDFDFD; }
      
 .login-container {
  width: 100%;
  display: flex;
  z-index: 100;
  overflow: auto;
  min-height: 100vh;
  align-items: center;
  border-color: var(--dl-color-gray-black);
  border-width: 1px;
  flex-direction: column;
  justify-content: center;
  background-image: linear-gradient(225deg, rgb(254, 172, 94) 0.00%,rgb(199, 121, 208) 50.00%,rgb(75, 192, 200) 100.00%);
}
.login-text {
  top: var(--dl-space-space-sixunits);
  left: 377px;
  height: 45px;
  position: absolute;
}
.login-textinput {
  top: 403px;
  left: 483px;
  width: 299px;
  position: absolute;
}
.login-textinput1 {
  top: 469px;
  left: 482px;
  width: 299px;
  position: absolute;
}
.login-text1 {
  top: 408px;
  left: 380px;
  position: absolute;
}
.login-text2 {
  top: 479px;
  left: 380px;
  position: absolute;
}
.login-navlink {
  top: 544px;
  left: 702px;
  position: absolute;
  text-decoration: none;
}
.login-text3 {
  top: 411px;
  left: 796px;
  position: absolute;
}
.login-navlink1 {
  display: contents;
}
.login-text4 {
  top: 436px;
  left: 796px;
  color: #ff0000;
  right: right;
  position: absolute;
  text-decoration: none;
}
@media(max-width: 1200px) {
  .login-container {
    box-shadow: 5px 5px 10px 0px #d4d4d4;
  }
}

    </style>
    <br><Br><br><br>
<form action="login.php" method="POST" style="text-align: center" >
<H1 style="text-align: center"> Sign In</H1>
<input type="text" name="user"
placeholder="username" style="text-align: center"/>
<br><br>
<input type="password" name="pass" placeholder="password" style="text-align: center" />
<br><br>
<input type="submit" value="SIGN IN" style="text-align: center" />

</form>
    <form action="signUp.php" method="POST" style="text-align: center" >
        <input type="submit" value="Don't have an account? Sign up" style="text-align: center" />
    </form>   
    
</body>
</html>