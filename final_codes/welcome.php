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
  width:15.5cm;
  height:8cm;
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
  
function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "major_proj");
    $result = mysqli_query($connect, $query);
   
    return $result;
}
    // username and password sent from form 
    
    $name =$_SESSION['mail'];
   
    // echo  exec("D:/xampp/htdocs/final_project/sample.py" );
  
    
   

    $sql = "SELECT uname FROM user WHERE mail_id = '{$name}' ";

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-6" style="margin-top:1.5cm;margin-left:3cm;">
    <h2><b>Welcome <?php echo $row[0];?>!</b></h2>  <br>
      <h2><b>Social </b>networks represent the digital reflection</h2>
      <h2> of humans do;</h2>
      <h2><b>we connect and share.</b></h2>
</div>
<div class="col-4" style="margin-right:1cm;">
<img id="image" src="new6.png">
</div>
</div>
</div>
<div class="container">
    <div class="row-fluid ">
    <?php
     $query = "SELECT * FROM post";
    $rs = executeQuery($query);
   
    if(mysqli_num_rows($rs)){
      while($r = mysqli_fetch_array($rs)){?>
      
       <div class="container">
        <div class="col-6">
            <div class="card-columns-fluid">
                <div class="card" style = "width: 67rem; " >
                <h5 class="card-header"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp&nbsp&nbsp<?php echo $r[1]; ?></h5>
                    <div class="card-body">
                        <p class="card-text"><?php echo $r[2]; ?></p>
                    </div>
                </div>
            </div>
            </div>
        </div><br><br>
<?php
     }
    }
     ?>
    </div>
</div> <!--container div  -->

</body>
 </html>