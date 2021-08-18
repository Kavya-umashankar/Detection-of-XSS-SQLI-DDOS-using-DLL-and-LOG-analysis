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
    margin:3cm;
    background-color:rgba(233, 233, 231, 0.918);
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
 
  $asc_query = "SELECT * FROM post";
  $result = executeQuery($asc_query);
 


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "major_proj");
    $result = mysqli_query($connect, $query);
   
    return $result;
}
if(mysqli_num_rows($result)){
  while($row = mysqli_fetch_array($result)){?>
   
<div class="card">
  <h5 class="card-header"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $row[1] ?></h5>
  <div class="card-body">
    <p class="card-text" style="text-align: justify;"><?php echo $row[2] ?>
</p>
  </div>
</div><br><br>
<?php
 }
}

?>
</body>
</html>