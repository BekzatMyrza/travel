<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>AdminPage</title>
	<style>
		table {
			border-collapse: collapse;
			width: 80%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
			margin: 0 auto;
		}
		th {
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		td:hover, th:hover {
			color: #DC143C;
		}
		.container {
			
		}
		#editbtn {
			color: green;
		}
		#deletebtn {
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<table>
			<tr>
				<th>User ID</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Country</th>
				<th>City</th>
				<th>Ticket Type</th>
				<th colspan="2" align="center">Operations</th>
			</tr>
			<?php
				include("connection.php");
				error_reporting(0);
				$sql = "SELECT*FROM ticket_users";
				$data = mysqli_query($conn,$sql);
				$total = mysqli_num_rows($data);
				if($total != 0) {
					while($row = mysqli_fetch_assoc($data)) {
						echo "<tr>
						<td>".$row["user_id"]."</td><td>".$row["firstname"]."</td>
						<td>".$row["lastname"]."</td><td>".$row["userEmail"]."</td>
						<td>".$row["userNumber"]."</td><td>".$row["userCountry"]."</td>
						<td>".$row["userCity"]."</td><td>".$row["ticket_type"]."</td>
						<td><a href='updateuser.php?userid={$row["user_id"]} & usercountry1={$row["userCountry"]} & 
						usercity1={$row["userCity"]} & usertickettype1={$row["ticket_type"]}'>
						<input type='submit' value='Edit/Update' id='editbtn'></td>
						<td><a href='deleteuser.php?userid={$row["user_id"]} & usercountry1={$row["userCountry"]} & 
						usercity1={$row["userCity"]} & usertickettype1={$row["ticket_type"]}' onclick='return checkdelete()'>
						<input type='submit' value='Delete' id='deletebtn'></td>
						<tr>";
					}
					echo "<table>";
				}
				else {
					echo "0 result";
				}
				$conn-> close();
			?>
		</table>
	</div>

<script>
	function checkdelete() {
		return Confirm("Are you sure to delete this info?");
	}
</script>

</body>
</html>