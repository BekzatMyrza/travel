<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Loginuserpage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>


<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['pass']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: useraustralia.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='loginuser.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>  
	
		
	<nav class="header_section">
  

  <ul>
        <li >

          <a class="link-1" href="main1.html">

            <img style="height: 120px;margin-bottom: -55px;margin-top: -40px; margin-left:-20px;" src="imagesforloginpage/Travel.png">
          
          </a>

        </li>
        
        <li style="margin-left: 600px;" >

          <a class=" link-1" href="#" data-title="count">COUNTRY</a>
          
          <ul>
              
              <li><a class=" link-1" href="visitoraustralia.php">Australia</a></li>
              
              <li><a  class=" link-1" href="visitorspain.php">Spain</a></li>
              
              <li><a class=" link-1" href="visitorbrazil.php">Brazil</a></li>
              
              <li><a  class=" link-1" href="visitorjapan.php">Japan</a></li>
              
              <li><a  class=" link-1" href="visitorislands.php">Islands</a></li>
          </ul>

        </li>


        

        <li>

          <a href="info.html" class=" link-1" data-title="travel">TRAVEL</a>
          
          <ul>
              
              <li><a class="link-1" href="visitoractivevacation.html">Active vacation</a></li>
              
              <li><a class="link-1" href="visitorbeachvacation.html">Beach vacation</a></li>
              
              <li><a  class="link-1" href="visitorkidsvacation.html">Vacation with kids</a></li>
          
          </ul>

        </li>
       

        <li ><a class=" link-1" href="visitoraboutus.php" data-title="about">ABOUT US</a></li>
        

        <li> <a class=" link-1" href="loginuser.php" data-title="login">LOG IN</a></li>

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
									<div class="row"><h2>User login</h2></div>
									<div class="row">
										<form action="" method="post">
											<div class="textbox">
												<span class="fa fa-user"></span>
												<input class="forform" type="text" name="username" placeholder="Username">
											</div>
											<div class="textbox">
												<span class="fa fa-lock"></span>
												<input class="forform mb-2" type="password" name="pass" placeholder="Password">
										    </div>
											<div class="mb-4"><input type="checkbox" name="remember" style="padding: 5px;"><span>Remember me</span></div>
											<div class="mb-2"><button type="submit" class="btn btn-primary form-control"><h4>LOGIN</h4></button></div>
										</form>
									</div>
									<div class="row mb-4">
										<p><a href="registration2.php">Do not have an account?</a></p>
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

<?php
    }
?>
</body>
</html>