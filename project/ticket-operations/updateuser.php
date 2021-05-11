<?php

include("connection.php");
error_reporting(0);
$userid = $_GET["userid"];
$usercountry1 = $_GET["usercountry1"];
$usercity1 = $_GET["usercity1"];
$usertickettype1 = $_GET["usertickettype1"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<div class="container">
		<form class="form-control" action="" method="GET">
			<table border="0" bgcolor="gray" align="center" cellspacing="20">
				<tr>
					<td>User ID</td>
					<td><input type="text" value="<?php echo "$userid" ?>" name="uid"  required></td>
				</tr>
				<tr>
					<td>Country</td>
					<td><input type="text" value="<?php echo "$usercountry1" ?>" name="country1"  required></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" value="<?php echo "$usercity1" ?>" name="city1"  required></td>
				</tr>
				<tr>
					<td>Ticket Type</td>
					<td><input type="text" value="<?php echo "$usertickettype1" ?>" name="tickettype1"  required></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update"></td>
				</tr>
			</table>
			<a href="adminpage1.php">Go to the AdminPage for UserInfo</a>
		</form>
	</div>
</body>
</html>

<?php

if($_GET['submit']) {
	$uid = $_GET['uid'];
	$country1 = $_GET['country1'];
	$city1 = $_GET['city1'];
	$tickettype1 = $_GET['tickettype1'];

	$sqlquery = "UPDATE ticket_users SET userCountry = '$country1', userCity = '$city1', ticket_type = '$tickettype1' WHERE user_id = '$uid';";
	$data = mysqli_query($conn, $sqlquery);

	if($data) {
		echo "<script>alert('Record Updated')</script>";
	}
	else {
		echo "Failed to Update Record";
	}
}
