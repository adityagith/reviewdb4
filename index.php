<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Delhi Bakery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            margin: 0px 0px;
        }
        .contain
        {
            display:flex;
        }
        /* div{
            border:2px solid black;
        } */
        .box1,.box2{
            height:1000px;
            width:50%;
        }
        .box1{
            background-color: black;
        }
        .box2{
            /* background-color: greenyellow; */
        }
        h1,h2{
            color:white;
            padding: 20px;
        }
        h2{
            font-size:27px;
        }
        #head2
        {
            float:right;
        }
        .img{
            height:700px;
            
            background: url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
            background-repeat: no-repeat;
            background-size: 98% 1000px;    
        }
        .box2{
            background: url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
            background-repeat: no-repeat;
            background-size: 100% 1000px;    
        }
        @media only screen and (min-width: 100px) and (max-width: 800px) {

            .box1,.box2{
            height:390px;
            width:100%;
        }  
            .box2{
                background: url('https://drive.google.com/thumbnail?id=1c-FBvHTBY7R5tG80ADfiM-dEsC03hbpQ');
            background-repeat: no-repeat;
            background-size: 100% 390px;    
        }  
        .contain
        {
            margin-top: 20px;
            display:flex;
            flex-direction: column;
        }  
        h2{
            font-size:18px;
        } 
        .h3{
            font-size:18px;
            /* margin-top:50px; */
        }
        h1,h2{
            color:white;
            padding: 10px;
        }
        }
        h3,h4{
            color:white;
            padding: 10px;
            float:right;
        }
        body{
            color:white;
        }
        input{
            margin-left:18px;
            background:black;
            color:white;
            border:2px solid black;
        }
        textarea{
            margin-left:18px;
            border:2px solid black;
            background:black;
            color:white;
            width:50%;
            height:50px;
        }
        button{
            margin-left:18px;
            border:2px solid white;
            border-radius:25px;
        }
        .h3{
            margin-top:-45px;
        }
        @media only screen and (min-width: 100px) and (max-width: 800px) {
            .box1,.box2{
                height:700px;
                width:100%;
            }
            .box2{
                display:none;
            }
            h3{
            font-size:10px;
        }
        } 
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="home.html">Home</a>
          <a class="navbar-brand" href="menuf.html">Menu</a>
          <a class="navbar-brand" href="#">Book a Seat</a>
          <a class="navbar-brand" href="#">Reviews</a>
          <a class="navbar-brand" href="timing.html">Timings</a>
        </div>
      </nav>
    <div class="contain">
        <div class="box1" id="box1">
            <?php
                //    $server = "localhost";
                //    $username = "root";
                //    $password = "";
                //    $database = "bakery";


                //    $server = "bjdybdnht2mursi0vang-mysql.services.clever-cloud.com";
                //    $username = "u110oqym3yg4xiov";
                //    $password = "tL0DWCFuVCEaTUMHU7uk";
                //    $database = "bjdybdnht2mursi0vang";

                $server = "db4free.net";
                $username = "adidasjiit";
                $password = "mysql2020";
                $database = "adityajiit";
                   $conn = mysqli_connect($server,$username,$password,$database);
                   if($conn)
                   {
                       $sql1 = "SELECT * FROM `review`";
                       $status1 = mysqli_query($conn,$sql1);
                       if($status1)
                       {
                           while($row=mysqli_fetch_assoc($status1))
                           {
                               echo "<h2>".$row['exp']."</h2>";
                               echo "<h3 class='h3'>".$row['name']."</h3><hr color='white'>";
                           }
                           echo "<h2>Add a review</h2>";
                           echo "<form action='review.php' method='POST'>";
                           echo "<input id = 'name'  placeholder='Enter your name' name='name'>"."<br>";
                           echo "<textarea placeholder='Enter your experience' value='exp' name='exp'></textarea><br>";
                           echo "<button onclick='submit'>Submit</button>";
                           echo "</form>";
                       }
                   }
                   else
                   {
                       echo "nope";
                   }
            ?>
        </div>
        <div class="box2">
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function addreview()
        {
            console.log(2);
        }
    </script>
</body>
</html>
<?php
               if($_SERVER['REQUEST_METHOD']=='POST')
               {
                   $name = $_POST['name'];
                   $exp = $_POST['exp'];
                   if($name=='')
                   {
                       echo "<script>alert('Name is empty');</script>";
                   }
                   else if($exp=='')
                   {
                       echo "<script>alert('Review is empty');</script>";
                   }
                   else
                   {
                      $sql2 = "INSERT INTO `review` (`serial`, `name`, `exp`) VALUES (NULL, '$name', '$exp')";
                      $status2 = mysqli_query($conn,$sql2);
                      if($status2)
                      {
                          echo "<script>alert('Review Added Successfully Please refresh the page to view updated list')</script>";
                      }
                      else{
                        echo "Our servers are down";
                      }
                   }
               }
            ?>
