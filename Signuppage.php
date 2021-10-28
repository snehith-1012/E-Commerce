<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="signup.css">

</head>
<title>Regostration Page</title>
<body onload='document.check.password.focus()'>

          
<form action="signup.php" name="check" method="POST" onsubmit="return  validateForm()">
  <div id="div1" id="div2"  class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <label><b>Team Name</b></label>
    <input type="text" placeholder="Team Name"  required>
    <label><b>Departement</b></label>
<input type="text" placeholder="Departement" required>
    <label><b>College Name</b></label>
    <input tyype="text"  placeholder="" required>
    <label><b>Team Name</b></label>
    <input type="text" required>
    <label><b>Team members name</b></label>
    <input type="text" required>
    <label><b>Paper Title</b></label>
    <input type="text" required>
    <label><b>payment details</b></label>
    <input type="text" required>
    <label><b>Abstract</b></label>
    <input type="text" required>
    <label><b>Phone number</b></label>
    <input type="text" required>
    <label><b>EMail id</b></label>
    <input type="text" required>
    <label><b>Address</b></label>
    <input type="text" required>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <p>By creating an account you agree to our <a href="#" id="myBtn" style="color:blue"> <label>
      <input type="checkbox"  required name="agree" id="agree" style="margin-bottom:15px">
    </label>Terms & Privacy</a>
        <div id="myModal" class="modal">

           
    <div class="clearfix">
      <button type="submit" name="submit" class="signupbtn" onclick="phonenumber(document.check.username);ValidateEmail(document.check.mail);allnumericplusminus(document.check.password)">Sign Up</button>
      <a href="home.html">
        <button type="button" class="cancelbtn">Cancel</button>
        </a>
    </div>
  </div>
  <script>
    function validateForm() {
            alert("Successfully Registered");
            return true;
        }
    </script>
  </form>
</body>
</html>