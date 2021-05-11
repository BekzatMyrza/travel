<?php

include("connection.php");
error_reporting(0);




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Form</title>
	
	<style>
		.register{
			background-image: url(https://reservationsnumber.org/wp-content/uploads/2020/07/Best-Air-New-Zealand-Deal.png);
			background-size: 100%;
			background-repeat: no-repeat;
		}
	</style>
</head>
<body>


	<header class="container-fluid text-lg-center p-2" style="background-color: black; color: white;">
		<h3>Header</h3>
	</header>

	<div class="register container-fluid d-flex justify-content-start p-5">
		
	
	
	<form action="#" method="get" class="col-5 row p-3 ml-4 mt-2 mb-2" style="background-color:#114C7B; color: white;">
		
		<div class="col-lg-12 text-center p-2" style="border-bottom: 2px solid white;">
			<h2>Book a Hotel</h2>
		</div>
		<div class="col-lg-12 row p-3"> 
			<label for="#" class="col-lg-3 text-lg-right">First Name</label>
			<input class="form-control col-lg-9" type="text" name="firstname" placeholder="Firstname" required>
		</div>

	

		<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">Lastname</label>
			<input class="form-control col-lg-9" type="text" name="lastname" placeholder="Lastname" required>
		</div>

		<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">Email</label>
			<input class="form-control col-lg-9" type="email" name="emaill" placeholder="Email" required>
		</div>


<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">Phone Number</label>
			<input class="form-control col-lg-9" type="text" name="phonenumber" placeholder="Phone number" required>
	</div>

		<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">Country</label>
			<input class="form-control col-lg-9" type="text" name="country" value="Australia" required>
		</div>

	<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">City</label>
			<input class="form-control col-lg-9" type="text" name="city" value="Sydney" required>
	</div>

		<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">Ticket type</label>
			<input class="form-control col-lg-9" type="text" name="tickettype" value="type1" required>
		</div>

		
		<div class="col-lg-12 p-2">
			<a href="form.php">
				<input class="form-control" type="submit" id="button" name="submit" style="background-color: #55B35F; color: white;">
			</a>
		</div>
	
	</form>

		</div>

		<footer class="container-fluid text-md-center p-4" style="background-color: black; color: white;">
			<h3>Footer</h3>
		</footer>
</body>
</html>

<?php

$first = $_GET['firstname'];
$last = $_GET['lastname'];
$email = $_GET['emaill'];
$num = $_GET['phonenumber'];
$country = $_GET['country'];
$city = $_GET['city'];
$tickettype = $_GET['tickettype'];

$query = "INSERT INTO `ticket_users`(`firstname`,`lastname`,`userEmail`,`userNumber`,`userCountry`,
`userCity`,`ticket_type`) VALUES('$first','$last','$email','$num','$country','$city','$tickettype');";
$data = mysqli_query($conn,$query);
if(isset($_GET['submit'])) {
	echo "Your answer saved";
}
else {
	echo "Something went wrong";
}

?>