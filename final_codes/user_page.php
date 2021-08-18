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
    background-color:rgba(233, 233, 231, 0.918);
    font-family:Georgia, 'Times New Roman', Times, serif;
}
.nav-item{
      width:4cm;
  }
  nav{
      background-color:navy!important;
  }
  .nav-link{
      color:white;
  }
  html, body {width: auto!important; overflow-x: hidden!important} 
  #image{
      width:18cm;
      height:7cm;

  }
  .card{
    border-color:rgba(233, 233, 231, 0.918) gray rgba(233, 233, 231, 0.918) rgba(233, 233, 231, 0.918);
  }
</style>    

<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php">Home <i class="fa fa-lg fa-home" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_search.php">Search for users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insertpage.php">&nbsp&nbspTweet / post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_page.php">Your account</a>
        </li>
        <li class="nav-item" style="margin-left:19cm;">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
           
<?php 

error_reporting(0);

$con = mysqli_connect("localhost","root","","major_proj");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $mail=$_SESSION['mail'];
  $asc_query = "SELECT * FROM user where mail_id= '{$mail}'";
  $result = executeQuery($asc_query);
 
  $row = mysqli_fetch_array($result);


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "major_proj");
    $result = mysqli_query($connect, $query);
   
    return $result;
}
?>
<div class="row">
<div class="col-5">
<div class="card mb-3" style="max-width: 540px;background-color:rgba(233, 233, 231, 0.918);margin:1cm;border-right">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="new13.png" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="margin-top:0.7cm;">
        <h5 class="card-title"><b><?php echo $row[1];?></b></h5>
        <p class="card-text">Email :<?php echo $row[0];?></p>
        <p class="card-text">Phone : <?php echo $row[3];?></p>
        
      </div>
    </div>
  </div>
</div>
</div>
<?php 

$query = "SELECT * FROM post where mail_id= '{$mail}'";
$rs = executeQuery($query);
 
?>

<div class="col-7"style="margin-top:1.6cm;font-family:Georgia, 'Times New Roman', Times, serif;">

</div>
</div>

<div class="container">
    <div class="row-fluid ">
    <?php
   if(mysqli_num_rows($result)){
    while($r = mysqli_fetch_array($rs)){?>
     
       
       <div class="container">
        <div class="col-6">
            <div class="card-columns-fluid">
                <div class="card" style = "width: 67rem; " >
                <h5 class="card-header"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp&nbsp&nbsp <?php echo $r[1];?> </h5>
                    <div class="card-body">
                        <p class="card-text"><?php echo $r[2];?></p>
                    </div>
                </div>
            </div>
            </div>
        </div><br><br>
      <?php
     }
    }
    else echo'No posts';
     ?>
    </div>
</div> <!--container div  -->

</body>
</html>