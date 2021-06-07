<?php

    $host ="localhost";
    $user = 'root';
    $pass = '';
    $name  ='user';


    $conn = mysqli_connect($host,$user,$pass,$name);

    if (mysqli_connect_error()) {
        # code...
        echo 'the error of the connection is '.mysqli_connect_error();
    }
    else {
        
    }


?>