<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>AdminPage</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style type="text/css">

	.table-container {
	padding: 0 10%;
	margin: 40px auto 0;

}

.linkss{
  text-decoration: none;
  color:white;
}
.linkss:hover{
    text-decoration: none;
  color:black;
  background-color: white;
  padding: 5px;
  border-radius: 5px;
}

.flex{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  padding: 50px;
  color:white;
  background-color: black;
  opacity: 0.9;
  margin-top: auto;
  position: sticky;
  min-width: 100%;
  top: 100%;
}
.flex1{
  display: flex;
  flex-direction: column;
  width: 20%;
}
.flex2{
  display: flex;
  flex-direction: column;
   width: 20%;
}
.flex3{
  display: flex;
  flex-direction: column;
   width: 20%;
}
.flex4{
  display: flex;
  flex-direction: column;
   width: 20%;
}


h4{
  text-align: center;
}

table {
	width: 100%;
	border-collapse: collapse;
}

table thead {
	background-color: #ee2828;
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

#editbtn {
	color: white;
	background-color: #15C372;
	border: none;
	border-radius: 4px;
}
#deletebtn {
	color: white;
	background-color: #F76363;
	border-radius: 4px;
	border: none;
}


body {
	background: url(https://i.pinimg.com/originals/e0/57/44/e05744161d7500a183d5ec3a38a6e626.jpg) fixed center;
	background-size: cover;
	font-family: sans-serif;
	min-height: 100vh;
	overflow-x: hidden;
}
table thead {
	background-color: #8CCAFF;
}
table {
	margin-bottom: 15px;
}
table thead tr th {
	font-size: 14px;
	font-weight: 600;
	letter-spacing: 0.35px;
	color: #FFFFFF;
	opacity: 1;
	padding: 12px;
	vertical-align: top;
	text-align: center;
	border: 1px solid #dee2e685;
	background-color: #7598B6;
}
table tbody tr td {
	font-size: 14px;
	letter-spacing: 0.35px;
	font-weight: normal;
	color: #f1f1f1;
	background-color: #3c3f44;
	padding: 8px;
	text-align: center;
	border: 1px solid #dee2e685;
}

.header_section {
position: relative;
z-index: 99999;
}
ul {
  display: block;
  text-align: center;
  margin: 0 auto;
  padding: 0;
  width: 100%;
  min-width: 535px;
  background-color: #7598B6;
  position: relative;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
}
ul:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: .5;
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADCAYAAABWKLW/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAB9JREFUeNpiZmBg6AZiDiBWZ4YyQMCOCcYA4kMAAQYAHyYCCUdxidgAAAAASUVORK5CYII=");
}

li {
  margin: 0 auto;
  display: inline-block;
  list-style: none;
  padding: 0;
}

.link-1 {
  display: inline-block;
  padding: 25px;
  text-transform: uppercase;
  position: relative;
  z-index: 2;
  text-shadow: 1px 0px rgba(0, 0, 0, 0.4);
  color: white;
  letter-spacing: .2em;
  text-decoration: none;
  transition: color 200ms;
  transform-style: preserve-3d;
}
.link-1:hover {
  color: #343e48;
  text-decoration: none;
}
.link-1:after {
  content: attr(data-title);
  position: absolute;
  display: block;
  text-shadow: none;
  top: 29%;
  left: 18px;
  padding: 5px 7px;
  color: transparent;
  background: #4795c3;
  transform-origin: 50% 0%;
  backface-visibility: hidden;
  transform: translate3d(0px, 105%, 0px) rotateX(-112deg);
  transform-style: preserve-3d;
  transition: all 200ms ease;
  z-index: -1;
}
li:nth-child(2) a:after {
  background: #ecc64b;
}
li:nth-child(3) a:after {
  background: #0b9ea6;
}
li:nth-child(4) a:after {
  background: #f26667;
}
.link-1:hover:after {
  transform: rotateX(0deg) translateZ(0px);
}
ul li ul {
 
  visibility: hidden;
  opacity: 0;
  position: absolute;
  transition: all 0.5s ease;
  left: 0;
  display: none;
  width: 20px;
}
ul li ul li{
  height: 40px;
  margin-bottom: 20px;
  background-color: #7598B6;
}
ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: grid;
  grid-template-columns: 100%;
  left: 800px;
}
/*footer{
  padding-top: 20px;
  width: 100%;
  height: 80px;
  margin-top: auto;
  position: sticky;
  top: 100%;
  background-color: #000000;
  color: white;
  text-align: center;
  margin-bottom: 0;
}*/
@media(max-width: 1200px) {
	table thead {
		display: none;
	}
	table, table tr, table tbody, table td {
		display: block;
		width: 100%;
	}

	table tr {
		margin-bottom: 15px;
	}
	table tbody tr td {
		text-align: right;
		padding-left: 50%;
		position: relative;
	}
	table td:before {
		content: attr(data-lable);
		position: absolute;
		left: 0;
		width: 50%;
		padding-left: 15px;
		font-weight: 600;
		font-size: 14px;
		text-align: left;
	}
}
@media(max-width: 500px) {
	table thead {
		display: none;
	}
	table, table tbody, table tr, table td {
		display: block;
		width: 100%;
	}

	table tr {
		margin-bottom: 15px;
	}
	table tbody tr td {
		text-align: right;
		padding-left: 50%;
		position: relative;
	}
	table td:before {
		content: attr(data-lable);
		position: absolute;
		left: 0;
		width: 50%;
		padding-left: 15px;
		font-weight: 600;
		font-size: 14px;
		text-align: left;
	}
}

</style>
</head>
<body>

  
<nav class="header_section">
  

  <ul>
        <li >

          <a href="#">

            <img style="height: 120px;margin-bottom: -55px;margin-top: -60px; margin-left:-20px;" src="Travel.png">
          
          </a>

        </li>
      

        <li> <a class=" link-1" href="addhotel.php" data-title="Admin">ADD HOTEL</a></li>
        
        <li>

          <a class=" link-1" href="#" data-title="home">COUNTRY</a>
          
          <ul>
              
              <li><a class=" link-1" href="adminaustralia.php">Australia</a></li>
              
              <li><a  class=" link-1" href="adminspain.php">Spain</a></li>
              
              <li><a class=" link-1" href="adminbrazil.php">Brazil</a></li>
              
              <li><a  class=" link-1" href="adminjapan.php">Japan</a></li>
              
              <li><a  class=" link-1" href="adminislands.php">Islands</a></li>
          </ul>

        </li>        

        <li> <a class=" link-1" href="main1.html" data-title="Blog">LOG OUT</a></li>


  </ul>

</nav>

	<div class="table-container">
		<table>
			<thead>
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
			</thead>
			<?php
				include("connection.php");
				error_reporting(0);
				$sql = "SELECT*FROM ticket_users";
				$data = mysqli_query($conn,$sql);
				$total = mysqli_num_rows($data);
				if($total != 0) {
					while($row = mysqli_fetch_assoc($data)) {
		echo "<tbody><tr>
			<td data-lable='User ID'>".$row["user_id"]."</td>
			<td data-lable='FirstName'>".$row["firstname"]."</td>
			<td data-lable='LastName'>".$row["lastname"]."</td>
			<td data-lable='Email'>".$row["userEmail"]."</td>
	        <td data-lable='Phone Number'>".$row["userNumber"]."</td>
	        <td data-lable='Country'>".$row["userCountry"]."</td>
			<td data-lable='City'>".$row["userCity"]."</td>
			<td data-lable='Ticket Type'>".$row["ticket_type"]."</td>
            <td data-lable='Operations' style='background-color:#89ED92'>
            <a href='newupdateuser.php?userid={$row["user_id"]} & usercountry1={$row["userCountry"]} & usercity1={$row["userCity"]} & usertickettype1={$row["ticket_type"]}'>
            <input type='submit' style='color:black; background-color:#89ED92' value='Edit/Update' id='editbtn'>
            </td>
			<td data-lable='Operations' style='background-color:#A94A4A'>
			<a href='deleteuser.php?userid={$row["user_id"]} & usercountry1={$row["userCountry"]} & usercity1={$row["userCity"]} & usertickettype1={$row["ticket_type"]}' onclick='return checkdelete()'>
			<input type='submit' style='background-color:#A94A4A' value='Delete' id='deletebtn'></td>
			<tr><tbody>";
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

<footer class="flex">
    <div class="flex1">
        <div>
          <h5>Services</h5>
          <hr>
        </div>
        <div>
          <a class="linkss" href="visitoraustralia.php">Travel tours</a>
        </div>
        <div>
          <a class="linkss" href="visitoractivevacation.html">Vacations</a>
        </div>
    </div>
    <div class="flex2">
        <div>
            <h5>About</h5>
            <hr>
        </div>
        <div>
            <a class="linkss" href="aboutus.php">About Us</a>
        </div>
    </div>
    <div class="flex3">
        <div>
            <h5>Contacts</h5>
            <hr>
        </div>
        <div>+7654xxxxxxx</div>
        <div>Nur-Sultan<br>Astana IT University</div>
    </div>
    <div class="flex4">
        <div >
            <img style="margin-top: -40px" height=160px width=180px src="Travel.png">
        </div>
        <div style="margin-top: -30px; margin-left: 30px">
            <a href="#"><img style=" margin-left: 5px" src="instagram.png"></a>
            <a href="#"><img style=" margin-left: 5px"   src="telegram.png"></a>
            <a href="#"><img style=" margin-left: 5px"   src="twitter.png"></a>
        </div>
    </div>
</footer>



<script>
	function checkdelete() {
		return Confirm("Are you sure to delete this info?");
	}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>