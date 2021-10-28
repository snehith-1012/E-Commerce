<?php
$username = filter_input(INPUT_POST, 'username');
$mail= filter_input(INPUT_POST, 'mail');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($mail)){
if (!empty($password)){
$host = "sql102.unaux.com";
$dbusername = "unaux_27324299";
$dbpassword = "svh0ne9en";
$dbname = "unaux_27324299_data";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO signup (username,email,password)
values ('$username','$mail','$password')";
if ($conn->query($sql)){
echo "Siggned-up sucessfully";
header('Location: Loginpage.php');
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>