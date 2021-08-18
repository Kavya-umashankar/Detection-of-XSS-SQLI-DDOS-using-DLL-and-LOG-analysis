<?php
session_start();
if(!isset($_SESSION['mail']))
{
  header("location: inject.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://tawian.io/text-spinners/spinners.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
body{
margin-top:2cm;
margin-left:1.4cm;
margin-right:1cm;
background-color:rgb(252, 255, 185);
}
.card{

box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
    display:inline-block;
    margin:0.9cm;
}
.card-title,.card-text{
    text-align:center;
}

 </style>   
<body>

        
<?php 

error_reporting(0);

$con = mysqli_connect("localhost","root","","major_proj");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form 
    
    $name =$_GET['search'];
    
  }
  $asc_query = "SELECT uname,mail_id,phone FROM user where uname like '%$name%'";
  $result = executeQuery($asc_query);
 


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "major_proj");
    $result = mysqli_query($connect, $query);
   
    return $result;
}
if(mysqli_num_rows($result)){

    while($row = mysqli_fetch_array($result)){?>
    <div class="card" style="width:400px">
<img class="card-img-top" src="https://cdn1.iconfinder.com/data/icons/ui-instagram-1/354/person-512.png" alt="Card image" style="  display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;">
    
        <div class="card-body">
          <h4 class="card-title"><?php echo $row[0] ?></h4>
          <p class="card-text"><?php echo $row[1] ?></p>
          <p class="card-text"><?php echo $row[2] ?></p>
        </div>
        </div>

<?php

    }
}
else{

    echo"No user found";

}
    ?>
</body>
</html>