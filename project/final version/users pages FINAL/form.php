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
			background-image: url(https://images.hdqwalls.com/download/plane-artwork-4k-4g-1920x1080.jpg);
			background-size: 100%;
			background-repeat: no-repeat;
		}
		html {
  scroll-behavior: smooth;
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
  text-decoration: none;
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

.flex{
    display: flex;
  flex-direction: row;
  justify-content: space-around;
  padding: 50px;
  color:white;
  background-color: black;
  opacity: 0.9;
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
hr{
   border: none;
    background-color: white; /*aligning text in places on the page */
    color: black; /*Selecting the color of the main text */
    height: 2px; /*Change the height of the border around*/
    width:200px;/*Change the width of the border around*/
    margin-left: -20px;
} 
h5{
    font-family: "Segoe UI";
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
	</style>
</head>
<body>


	<nav class="header_section">
  

  <ul>
        <li >

          <a class=" link-1" href="main.html">

            <img style="height: 120px;margin-bottom: -55px;margin-top: -60px; margin-left:-20px;" src="Travel.png">
          
          </a>

        </li>
        <li style="margin-left: 180px; margin-right: 20px">
          <form action="#" method="post" class=" link-1" style="position: relative; top: 14px;">
            <div style="overflow: hidden; padding-right: .5em;"><input style="width: 100%;
  padding-right: 40px;" class="form-control" type="text" name="search" placeholder="Search hotel"></div>
            <input class="form-control" style="width: 40px; position: absolute; top: 25px; right: -10px;" type="submit" data-toggle='modal' value=">>" name="">
          </form>
        </li>
        
        <li>

          <a class=" link-1" href="#" data-title="home">COUNTRY</a>
          
          <ul>
              
              <li><a class=" link-1" href="useraustralia.php">Australia</a></li>
              
              <li><a  class=" link-1" href="userspain.php">Spain</a></li>
              
              <li><a class=" link-1" href="userbrazil.php">Brazil</a></li>
              
              <li><a  class=" link-1" href="userjapan.php">Japan</a></li>
              
              <li><a  class=" link-1" href="userislands.php">Islands</a></li>
          </ul>

        </li>
        

        <li>

          <a href="#" class=" link-1" data-title="About">TRAVEL</a>
          
          <ul>
              
              <li><a class="link-1" href="firstinfo.html">Active vacation</a></li>
              
              <li><a class="link-1" href="newnew.html">Beach vacation</a></li>
              
              <li><a  class="link-1" href="new.html">Vacation with kids</a></li>
          
          </ul>

        </li>
       

        <li ><a class=" link-1" href="aboutus.php" data-title="Portfolio">ABOUT US</a></li>
        

        <li> <a class=" link-1" href="visitormain.html" data-title="Blog">LOG OUT</a></li>

       


  </ul>

</nav>
	<div class="register container-fluid d-flex justify-content-start p-3">
		
	
	
	<form action="#" class="col-5 row p-3 ml-4 mt-2 mb-2" style="background-color: #7598B6; color: white; border-radius: 10px; border-style: groove; box-shadow: 7px 8px #294468">
		
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
			<select class="form-control col-lg-9" name="country" >
				<option value="Australia">Australia</option>
				<option value="Spain">Spain </option>
				<option value="Brazil">Brazil</option>
				<option value="Japan">Japan </option>
				
			</select>

		</div>

  	<div class="col-lg-12 row p-3">
  			<label for="#" class="col-lg-3 text-lg-right">City</label>
  			<input class="form-control col-lg-9" type="text" name="city" placeholder="Choose city">
  	</div>

    <div class="col-lg-12 row p-3">
        <label for="#" class="col-lg-3 text-lg-right">Departure</label>
        <input class="form-control col-lg-9" type="date" name="departure" required>
    </div>

    <div class="col-lg-12 row p-3">
        <label for="#" class="col-lg-3 text-lg-right">Arrival</label>
        <input class="form-control col-lg-9" type="date" name="arrival" required>
    </div>

		<div class="col-lg-12 row p-3">
			<label for="#" class="col-lg-3 text-lg-right">Participants</label>
			<select class="form-control col-lg-9" name="tickettype" >
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
				
			</select>

		</div>

		
		<div class="col-lg-12 p-2">
			<!--<button class="form-control" type="submit" style="background-color: #294468; color:white ; border:none;">Submit</button>-->
      <a href="form.php">
        <input class="form-control" type="submit" id="button" name="submit" style="background-color: #294468; color:white ; border:none;">
      </a>
		</div>
	
	</form>

		</div>

		<footer class="flex">
  

  <div class="flex1">
    <div>
      <h5>Services</h5>
      <hr>
    </div>
    <div><a class="linkss" href="">Travel tours</a></div>
    <div><a class="linkss" href="">Vacations</a></div>
  </div>
  <div class="flex2">
    <div>
      <h5>About</h5>
      <hr>
    </div>
    <div><a class="linkss" href="aboutus.php">About Us</a></div>
  </div>
  <div class="flex3">
    <div>
      <h5>Contacts</h5>
      <hr>
    </div>
    <div>+7654xxxxxxx</div>
    <div>Nur-Sultan<br>
     Astana IT University</div>
  </div>
  <div class="flex4">
    <div ><img style="margin-top: -40px" height=160px width=180px src="Travel.png"></div>
    <div style="margin-top: -30px; margin-left: 30px">
      
      <a href="#"><img style=" margin-left: 5px" src="instagram.png"></a>
      <a href="#"><img style=" margin-left: 5px"   src="telegram.png"></a>
      <a href="#"><img style=" margin-left: 5px"   src="twitter.png"></a>
    </div>
  </div>
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
$departure = $_GET['departure'];
$arrival = $_GET['arrival'];
$tickettype = $_GET['tickettype'];

if(isset($_GET['submit'])) {
  $query = "INSERT INTO `ticket_users`(`firstname`,`lastname`,`userEmail`,`userNumber`,`userCountry`,
`userCity`,`departure_date`,`arrival_date`,`ticket_type`) VALUES('$first','$last','$email','$num','$country','$city','$departure','$arrival','$tickettype');";
$data = mysqli_query($conn,$query);
}

?>