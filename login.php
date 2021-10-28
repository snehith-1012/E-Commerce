<?php
$host = "sql102.unaux.com";
$dbusername = "unaux_27324299";
$dbpassword = "svh0ne9en";
$dbname = "unaux_27324299_data";
// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
if(isset($_POST["username"], $_POST["password"])) 
        {     
            
            $username = $_POST["username"]; 
            $password = $_POST["password"]; 

            $result = mysqli_query($conn,"SELECT username, password FROM signup WHERE username = '".$username."' AND  password = '".$password."'");
            if(mysqli_num_rows($result) > 0 ) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $username; 
                $msg = "Logged in successful!";
                header("Location: ../interface.html?msg=".$msg);
            }
            else
            {
                $msg = "Username or Password is Incorrect!";
                header("Location: ../Loginpage.php?msg=".$msg);
            }
    }
?>