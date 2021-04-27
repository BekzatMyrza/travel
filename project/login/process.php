<?php

session_start();


$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn, 'codelabproject');

$email = $_POST['email'];
$password = $_POST['pass'];

$s = "SELECT * FROM admin WHERE email = '$email' AND password = '$password' AND id = '1'";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
	header("location:adminpage.php");
}
else {
	header("location:loginpage.php");
}

?>