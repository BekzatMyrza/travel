<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Loginpage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	
		
	<nav class="header_section">
  

  <ul>
        <li >

          <a class=" link-1" href="main1.html">

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
              
              <li><a class=" link-1" href="visitoraustralia.php">Australia</a></li>
              
              <li><a  class=" link-1" href="visitorspain.php">Spain</a></li>
              
              <li><a class=" link-1" href="visitorbrazil.php">Brazil</a></li>
              
              <li><a  class=" link-1" href="visitorjapan.php">Japan</a></li>
              
              <li><a  class=" link-1" href="visitorislands.php">Islands</a></li>
          </ul>

        </li>
        

        <li>

          <a href="visitoraboutus.php" class=" link-1" data-title="About">TRAVEL</a>
          
          <ul>
              
              <li><a class="link-1" href="visitoractivevacation.html">Active vacation</a></li>
              
              <li><a class="link-1" href="visitorbeachvacation.html">Beach vacation</a></li>
              
              <li><a  class="link-1" href="visitorkidsvacation.html">Vacation with kids</a></li>
          
          </ul>

        </li>


        <li> <a class=" link-1" href="#" data-title="Blog">LOG IN</a>
      <ul>
        <li><a class="link-1" href="login.php">FOR ADMIN</a></li>
        <li><a class="link-1" href="loginuser.php">FOR USERS</a></li>
      </ul>
  </li>
       

        <li ><a class=" link-1" href="visitoraboutus.php" data-title="Portfolio">ABOUT US</a></li>
        



  </ul>

</nav>



		<main class="back">
			<div class="container-fluid">
				<div class="bodyy">
					<div class="row">
						<div class="log mt-5 mb-5">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-6">
									<img src="imagesforloginpage/chillman2.jpg" class="responsive">
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-6">
									<div class="row"><h2>Admin login</h2></div>
									<div class="row">
										<form action="process.php" method="POST">
											<div class="textbox">
												<span class="fa fa-user"></span>
												<input class="forform" type="email" name="email" placeholder="Email">
											</div>
											<div class="textbox">
												<span class="fa fa-lock"></span>
												<input class="forform" type="password" name="pass" placeholder="Password">
										    </div>
											<div class="mb-4"><input type="checkbox" name="remember" style="padding: 5px;"><span>Remember me</span></div>
											<div class="mb-2"><button type="submit" class="btn btn-primary form-control"><h4>LOGIN</h4></button></div>
										</form>
									</div>
									<div class="row mb-4">
										<p><a href="#">Forget email / passsword?</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>


		<footer class="flex">
  

  <div class="flex1">
          
          <div>
            <h5>Services</h5>
            <hr>
          </div>
          

          <div><a class="linkss" href="adminaustralia.php">Travel tours</a></div>
          

          <div><a class="linkss" href="info.html">Vacations</a></div>
  </div>
  <div class="flex2">
          
          <div>
            <h5>About</h5>
            <hr>
          </div>
          
          <div><a class="linkss" href="aboutus.html">About Us</a></div>
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
        <div >

          <img style="margin-top: -40px" height=160px width=180px src="imagesforloginpage/Travel.png">

        </div>
        

        <div style="margin-top: -30px; margin-left: 30px">
          
          <a href="#"><img style=" margin-left: 5px" src="imagesforloginpage/instagram.png"></a>
          <a href="#"><img style=" margin-left: 5px"   src="imagesforloginpage/telegram.png"></a>
          <a href="#"><img style=" margin-left: 5px"   src="imagesforloginpage/twitter.png"></a>
        
        </div>
  </div>
</footer>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>	
</body>
</html>