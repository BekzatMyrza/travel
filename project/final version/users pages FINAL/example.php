<html>
<head>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>


    <style>
    .new{
        display: grid;
        grid-template-areas:
        'first second third';
        grid-template-columns: 1.5fr 3fr 1fr;

    }
    .first{
        grid-area: first;
    }
    .second{
        grid-area: second;
        text-align: center;
        margin-top: 100px;
        margin-bottom: 190px;
    }
    .third{
        grid-area: third;
    }
</style>
</head>

<body>


<div class="new" style="background-image: url('https://7themes.su/_ph/27/839946471.jpg'); padding-top: 140px; ">
    <div class="first"></div>
    <div class="second col-9" style="margin-left: 70px;">
        <form method="post" action="example.php">

          <div class="row" style="background-color:  #789F7B; border-radius: 10px;">
            <div class="row ">
                
                <H3 align="center" style="color:white;" class="mt-2">Your review</H3>
            
            </div>
           
            
            <div class="row ">
                
                <div class="col-lg-3 col-12 col-md-12 text-lg-end text-center pt-4" style="color: yellow;">Title</div>
               
                <div class="col-lg-9 col-12 col-md-12 mb-3 mt-3">
                    <input type="text" name="Title" class="form-control" placeholder="Enter Title...">
                </div>
            
            </div>


            <div class="row ">
                
                <div class="col-lg-3 col-12 col-md-12 text-lg-end text-center pt-4" style="color: yellow;">Author</div>
               
                <div class="col-lg-9 col-12 col-md-12 mb-3 mt-3">
                    <input type="text" name="Author" class="form-control" placeholder="Enter Author...">
                </div>
            
            </div>


             

            <div class="row">
                
                <div class="col-lg-3 col-12 col-md-12 text-lg-end text-center"  style="color: yellow;">Photo</div>
                
                <div class=" col-lg-9 col-12 col-md-12 mb-3">
                    
                    <input type="text" name="picture" class="form-control" placeholder="Enter links...">
               
                </div>
            </div>
           

            <div class="row">
                  <div class="col-8 text-left p-2 rounded-bottom">
                
            </div>
            
            <div class="col-4 text-left p-2 mx-1rounded-bottom">
                
                <input type="submit" name = "submit" class="btn btn-primary float-center border-0 m-1 w-100" value="Submit" style="background-color: #2F3A30; color:white; ">
            </div>
        </div>
        </form>
           

    </div>
</div>
    <div class="third"></div>
    
</body>
</html> 

<?php
    require('connect.php');



    if (isset($_REQUEST['submit'])) {
        # code...

    
        $title = $_REQUEST['Title'];
        $author = $_REQUEST['Author'];
    $pic = $_REQUEST['picture'];
    


            $sql = "INSERT INTO newform(Title,Author,Picture)
                VALUES('".$title."','".$author."', '".$pic."')";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        


    }
    else {
        
    }


?>