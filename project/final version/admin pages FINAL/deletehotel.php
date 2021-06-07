<?php

include("connection.php");
error_reporting(0);
$hotelid1 = $_GET["hotelid1"];
$sqlquery = "DELETE FROM countryhotels WHERE hotelid = '$hotelid1';";
$data = mysqli_query($conn, $sqlquery);

if($data) {
	echo "<script>alert('Record DELETED from Database')</script>";
}
else {
	echo "<font color='red'>Fail while DELETING. YOU are STUPID";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
<style type="text/css">
html,body {
	min-height: 100vh;
	margin: 0;
	background: url(https://i.pinimg.com/originals/e0/57/44/e05744161d7500a183d5ec3a38a6e626.jpg) fixed center;
	background-size: cover;
}
.cont {
	height: 500px;
	line-height: 500px;
	width: 50%;
	align-self: center;
	background-color: transparent;
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	text-align: center;
}
a {
	font-size: 50px;
	text-decoration: none;
	color: lightgreen;
	font-family: "Gill Sans", sans-serif; 
}
.coollink::after {
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background: #fff;
	transition: width .3s;
}
.coollink:hover::after {
	width: 100%;
	transition: width .3s;
}
a:hover {
	color: #B01010;
}
</style>
</head>
<body>
	<div class="cont">
		<a class="coollink" href='adminaustralia.php'>Go to the Adminka peidzh</a>
	</div>
</body>
</html>