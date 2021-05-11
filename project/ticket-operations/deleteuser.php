<?php

include("connection.php");
error_reporting(0);
$userid = $_GET["userid"];
$sqlquery = "DELETE FROM ticket_users WHERE user_id = '$userid';";
$data = mysqli_query($conn, $sqlquery);

if($data) {
	echo "<script>alert('Record DELETED from Database')</script>";
}
else {
	echo "<font colot='red'>Fail while DELETING. YOU are STUPID";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<a href='adminpage1.php'>Go to the Adminka peidzh</a>
</body>
</html>