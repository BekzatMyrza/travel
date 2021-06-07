<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admincountrypagestyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>adminBrazil</title>
  <style>
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
  </style>
</head>
<body>

<nav class="header_section" id="myHeader">
  

  <ul>
        <li >

          <a href="#">

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

        <li> <a class=" link-1" href="adminpage1.php" data-title="Admin">BOOKING INFO</a></li>
        

        <li> <a class=" link-1" href="main1.html" data-title="Blog">LOG OUT</a></li>


  </ul>

</nav>

    <div style="margin-top:-20px;" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          
            <div class="carousel-item active">
              <img class="d-block w-100 " src="https://desperationchurch.tv/wp-content/uploads/2019/08/Brazil-Banner.png" alt="First slide" style="height: 400px; ">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://hwpi.harvard.edu/files/styles/os_files_xxlarge/public/drclas2/files/brazil-banner.jpg?m=1562876754&itok=MhShgKye" alt="Second slide" style="height: 400px; ">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src=" https://s3-cf.prod.veem.com/wp-content/uploads/2017/11/23090116/Brazil-banner-1-1568x641.jpg" alt="Third slide" style="height: 400px; ">
            </div>

        </div>

    </div>

    <div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>



<!-- ----------------------------------- -->


<div class="main">

  <?php
        include("connection.php");
        //////////////////////////
        if(isset($_POST['search'])) {
              $searchq = $_POST['search'];
              $firstquery = "SELECT*FROM `countryhotels` WHERE `hotelname` = '$searchq'";
              $firstdata = mysqli_query($conn,$firstquery);
              $count = mysqli_num_rows($firstdata);
              if($count == 0) {
                echo "no search results!";
              }
              else {
                while($row = mysqli_fetch_assoc($firstdata)) {
                    echo "<div class='price'>
        <div style='width: 100%;''>
            <button type='button' class='form-control' data-toggle='modal' style='background-color: #7598B6; color: white; height: 50px;'' data-target='#".$row["hotelname"]."'>Read more</button>
        </div>
      </div>
                    <div class='modal fade' id='".$row["hotelname"]."' tabindex='-1' role='dialog'aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-xl' style='margin-top: 100px' role='document'  >
        <div class='modal-content' >
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLongTitle'>".$row["hotelname"]."</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>

            <div class='modal-body d-flex justify-content-between row' >
                <div id='carouselExampleControls' class='carousel slide col-7' data-ride='carousel'>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'>
                            <img class='d-block w-100' src='".$row["caruselphoto1"]."' alt='First slide' style='height: 400px;'>
                        </div>
                        <div class='carousel-item'>
                            <img class='d-block w-100' src='".$row["caruselphoto2"]."' alt='Second slide'  style='height: 400px;'>
                        </div>
                        <div class='carousel-item'>
                            <img class='d-block w-100' src='".$row["caruselphoto3"]."' alt='Third slide'  style='height: 400px;'>
                        </div>
                        <div class='carousel-item'>
                            <img class='d-block w-100' src='".$row["caruselphoto4"]."' alt='Third slide'  style='height: 400px;'>
                        </div>
                    </div>

                    <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                          <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                          <span class='sr-only'>Previous</span>
                    </a>

                    <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                          <span class='carousel-control-next-icon' aria-hidden='true'></span>
                          <span class='sr-only'>Next</span>
                    </a>
                </div>


                <div class='col-5'>
                    <h4>".$row["hotelname"]."</h4>
                    <p style='margin-left: 5px;'>".$row["hotelinfo1"]."</p>
                    <p style='margin-left: 5px;'>".$row["hotelinfo2"]."</p>
                    <p style='margin-left: 5px;'>".$row["hotelinfo3"]."</p>
                    <p style='margin-left: 5px;'>Price: ".$row["hotelprice"]."$</p>
                </div>

            </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'><a href='deletehotel.php?hotelid1={$row["hotelid"]}' onclick='return checkdelete()' style='color:white'>Delete</a></button>
                </div>

        </div>
    </div>
</div>";}
      }
    }
        //////////////////////////
        $sql = "SELECT*FROM countryhotels where hotelcountry = 'Brazil'";
        $data = mysqli_query($conn,$sql);
        $total = mysqli_num_rows($data);
        if($total != 0) {
          while($row = mysqli_fetch_assoc($data)) {
           
echo"<div class='country' data-aos='fade-up'>
      <img src='".$row["hotelphoto"]."' alt='' class='photo' >
      <div class='info' style='padding: 10px;'>
          <p style='font-size: 25px; margin-top: 4px;''>".$row["hotelname"]."</p>
          <p style='margin-top: -16px;'><b>City</b>:".$row["hotelcity"]."</p>
          <p style='margin-top: -13px; font-size: 15px; text-align: justify;'>".$row["hook"]."<p>
      </div>


      <div class='price'>
        <div style='width: 50%;''>
            <button type='button' class='form-control' data-toggle='modal' style='background-color: #7598B6; color: white; height: 50px;'' data-target='#".$row["hotelname"]."'>Read more</button>
        </div>
        <div class='read_more'>
          <form action='edithotel.php'>
              <button  class='form-control' style='height: 50px; background-color: #82B440; color:white;'>
                    <a style='color:white' href='edithotel.php?hotelid1={$row["hotelid"]} & hotelname1={$row["hotelname"]} & hotelcity1={$row["hotelcity"]} & hook1={$row["hook"]} & hotelinfo11={$row["hotelinfo1"]} & hotelinfo22={$row["hotelinfo2"]} & hotelinfo33={$row["hotelinfo3"]} & hotelprice1={$row["hotelprice"]} & hotelcountry1={$row["hotelcountry"]} & hotelphoto1={$row["hotelphoto"]}'>Update Info</a>
              </button>
          </form>
        </div>
      </div>
</div>
    <div class='modal fade' id='".$row["hotelname"]."' tabindex='-1' role='dialog'aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-xl' role='document'  >
        <div class='modal-content' >
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLongTitle'>".$row["hotelname"]."</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>

            <div class='modal-body d-flex justify-content-between row' >
                <div id='".$row["hotelphoto"]."' class='carousel slide col-7' data-ride='carousel'>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'>
                            <img class='d-block w-100' src='".$row["caruselphoto1"]."' alt='First slide' style='height: 400px;'>
                        </div>
                        <div class='carousel-item'>
                            <img class='d-block w-100' src='".$row["caruselphoto2"]."' alt='Second slide'  style='height: 400px;'>
                        </div>
                        <div class='carousel-item'>
                            <img class='d-block w-100' src='".$row["caruselphoto3"]."' alt='Third slide'  style='height: 400px;'>
                        </div>
                    </div>

                    <a class='carousel-control-prev' href='#".$row["hotelphoto"]."' role='button' data-slide='prev'>
                          <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                          <span class='sr-only'>Previous</span>
                    </a>

                    <a class='carousel-control-next' href='#".$row["hotelphoto"]."' role='button' data-slide='next'>
                          <span class='carousel-control-next-icon' aria-hidden='true'></span>
                          <span class='sr-only'>Next</span>
                    </a>
                </div>


                <div class='col-5'>
                    <h4>".$row["hotelname"]."</h4>
                    <p style='margin-left: 5px;'>".$row["hotelinfo1"]."</p>
                    <p style='margin-left: 5px;'>".$row["hotelinfo2"]."</p>
                    <p style='margin-left: 5px;'>".$row["hotelinfo3"]."</p>
                    <p style='margin-left: 5px;'>Price: ".$row["hotelprice"]."$</p>
                </div>

            </div>

                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'><a href='deletehotel.php?hotelid1={$row["hotelid"]}' onclick='return checkdelete()' style='color:white'>Delete</a></button>
                </div>

        </div>
    </div>
</div>";}
    }
  else {
    echo "0 result";
  }
  $conn->close();
  ?>
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
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script>
  function checkdelete() {
    return Confirm("Are you sure to delete this info?");
  }
</script>


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
