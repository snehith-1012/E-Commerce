<?php
session_start();
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
//For admin if he want to know who is register
$to="pavankalyan891991@gmail.com";
$subject = "Thank you!";
$txt = "Some one show your demo Email id: ".$email." Mobile number : ".$username."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: pavankalyan950295@gmail.com";
mail($to,$subject,$txt,$headers);
echo "<p>Thank you for show our Demo.</p>";
//For admin if he want to know who is register
}
else{
echo "<p>Invalid OTP</p>";
}
}
//resend OTP
if(isset($_POST['resend']))
{
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
$headers = "From: otp@studentstutorial.com" . "\r\n" .
"CC: pavankalyan950295@gmail.com";
mail($to,$subject,$txt,$headers);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot_pwd.css">
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<title>OTP verification</title>
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
                  <li><a href="OTP.html">OTP</a></li>
                  <li><a href="Help.html">Help Center</a></li>
               </ul>
           </nav>
           <img src="images\trolly.png" width="30px" height="30px"><p>cart</p>
       </div> 

<form action="/action_page.php">
  <div id="div1" id="div2"  class="container">
    <h1>Confirm OTP</h1>
    <p>To change password enter OTP you got</p>
    <br>
    

    <label for="OTP"><b>Enter OTP</b></label>
    <input type="text" placeholder="Enter 6 digit code" name="OTP" required><br><br>
    

    <div class="clearfix">
      <button type="submit" class="signupbtn">Continue</button>
      <a href="forgot_pwd.html">
        <button type="button" class="cancelbtn">Cancel</button>
        </a>
    </div>
  </div>

</div>
</form>
</body>
</html>
