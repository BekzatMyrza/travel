<?php
$conn = mysqli_connect("localhost","root","","user");
if($conn-> connect_error) {	
	die("Connection failed:". $conn-> connect_error);
}
error_reporting(0);