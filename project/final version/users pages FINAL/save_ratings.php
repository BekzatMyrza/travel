<?php

$idhotel = $_POST["idhotel"];
$ratings = $_POST["ratings"];

$conn = mysqli_connect("localhost","root","","user");
mysqli_query($conn, "INSERT INTO ratings (idhotel, ratings) VALUES ('$idhotel','$ratings')");

echo "Saved";