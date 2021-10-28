<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<title>Login</title>
<body>
     <div class="header">
       <div class="container1">
    <div class="navbar">
           <div class="logo">
            <a href="home.html"><img src="images\logo.png"width="100%"></a>
           </div>
           <input type="text" placeholder="search for products, brands and more" style="width:450px;height:25px;">
           <input type="button" value="search" style="width:100px;height: 30px;"> 
           <nav>
               <ul>
                   <li><a href="home.html">Home</a></li>
                   <li><a href="About.html">About</a></li>
                  <li><a href="Loginpage.php">Login</a></li>
                  <li><a href="Help.html">Help Center</a></li>
               </ul>
           </nav>
           <img src="images\trolly.png" width="30px" height="30px"><p>cart</p>
       </div> 
      <form action="login.php" name="check" method="POST" onsubmit="return validateForm()">
  <div id="div1" id="div2"  class="container">
      <?php
      if(isset($_GET['msg'])) echo $_GET['msg']
      ?>
    <h1>Login</h1>
    <p>Please fill in this form to Login.</p>
    <br>
    <label for="username"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter username" id="username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>
    <label>
      <input type="checkbox" onclick="myFunction()">Show password<br> <br>
    </label>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>New User Create a Account  <a href="Signuppage.php" style="color:blue"> Sign-up?</a></p><br>
    

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit" onclick="phonenumber(document.check.username)">Login</button>

      <a href="home.html">
        <button type="button" class="cancelbtn">Cancel</button>
        </a>
        <div class="psw"><a href="forgot_pwd.html" style="color: blue;">Forgot password?</a></div>
    
    </div>
  </div>

</div>
 <!--1.To show password-->
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
 <!--2.To validate mobileno-->
 <script>
  function phonenumber(inputtxt)
{
var phoneno = /^\d{10}$/;
if(inputtxt.value.match(phoneno))
{
  username.setCustomValidity("");
    return true;
}
else
{
  username.setCustomValidity("Not a valid Phone Number");
   return false;
}
}
</script>
</form>
</body>
</html>
