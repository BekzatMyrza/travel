<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Add Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="addhotelstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>




<nav class="header_section">
  <ul>
    <li >
        <a href="#">
            <img style="height: 120px;margin-bottom: -55px;margin-top: -40px; margin-left:-20px;" src="Travel.png">
        </a>
	</li>    
    <li style="margin-left: 600px;" >
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



<div class="wrapper">
	<div class="title">
		Add New Hotel
	</div>
	<div class="form">
    <form method="get" action="#">
  		<div class="input-field">
  			<label>Hotel Name</label>
  			<input type="text" class="input" name="hhotelname">
  		</div>
  		<div class="input-field">
  			<label>Hotel City</label>
  			<input type="text" class="input" name="hhotelcity">
  		</div>
  		<div class="input-field">
  			<label>Hook</label>
  			<textarea class="textarea" name="hhook"></textarea>
  		</div>
  		<div class="input-field">
  			<label>Hotel Info1</label>
  			<textarea class="textarea" name="hhotelinfo1"></textarea>
  		</div>
      <div class="input-field">
        <label>Hotel Info2</label>
        <textarea class="textarea" name="hhotelinfo2"></textarea>
      </div>
      <div class="input-field">
        <label>Hotel Info3</label>
        <textarea class="textarea" name="hhotelinfo3"></textarea>
      </div>
  		<div class="input-field">
  			<label>Hotel Price</label>
  			<input type="text" class="input" name="hhotelprice">
  		</div>
  		<div class="input-field">
  			<label>Hotel Country</label>
  			<input type="text" class="input" name="hhotelcountry">
  		</div>
  		<div class="input-field">
  			<label>Hotel Photo</label>
  			<input type="text" class="input" name="hhotelphoto">
  		</div>
  		<div class="input-field">
  			<input type="submit" value="SEND" class="btn" name="sentt">
  		</div>
    </form>
	</div>
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
    <div><a class="linkss" href="">About Us</a></div>
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


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 100, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
</script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<?php

$hname = $_GET['hhotelname'];
$hcity = $_GET['hhotelcity'];
$hook = $_GET['hhook'];
$hinfo1 = $_GET['hhotelinfo1'];
$hinfo2 = $_GET['hhotelinfo2'];
$hinfo3 = $_GET['hhotelinfo3'];
$hprice = $_GET['hhotelprice'];
$hcountry = $_GET['hhotelcountry'];
$hphoto = $_GET['hhotelphoto'];

if($_GET['sentt']) {
  $query = "INSERT INTO `countryhotels`(`hotelname`,`hotelcity`,`hook`,`hotelinfo1`,`hotelinfo2`,`hotelinfo3`,`hotelprice`,`hotelcountry`,`hotelphoto`) VALUES('$hname','$hcity','$hook','$hinfo1','$hinfo2','$hinfo3','$hprice','$hcountry','$hphoto');";
  $data = mysqli_query($conn,$query);
}


?>