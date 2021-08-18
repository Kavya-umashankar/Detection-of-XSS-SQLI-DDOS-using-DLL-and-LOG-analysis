<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    background-color:rgb(213, 235, 253);
    font-family:Georgia, 'Times New Roman', Times, serif;
    padding:1.2cm;
    
}
img{
    width:17cm;
    height:12cm;
}
</style>
<body>
  <?php
$command = escapeshellcmd("python D:/Xampp/htdocs/final_codes/admin.py ");
$output = shell_exec($command);
// print(gettype($output));
 #print_r($output);
$sp = explode(' ',$output);


// echo $output[1];
// echo $output[2];
// echo $output[3];

?>
<div class="row">
  <div class="col-8">
<h1>Admin Dashboard</h1>
<p>see statistics about the social media site here</p>
<hr>
</div>
<div class="col-4">
<form method="post" action="log.php">
        <h5>Click here for log analysis &nbsp &nbsp <input type="submit" name="button1" class="btn btn-primary" value="Click"/>
    </form>   
</div>

</div>

<?php

?>
<div>
<div class="row">
  <div class="col-md-6" style="min-height: 500px;">
  <img src="main.png">
  </div>

  <div class="col-md-6">
    <div class="row h-100 flex-column">
      <div class="col-md-6 mw-100">
        <h5><b>The Total number of requests : <?php echo $sp[3]; ?></b></h5>
      <div class="card-deck" style="margin-top:1cm;">
        <div class="card">
            
            <div class="card-block">
            <div class="card-header"><h5><b>BENIGN: <?php echo $sp[4]; ?> </b></h5></div>
            <div class="card-body">
                <p class="card-text">
                    This is the total benign requests.
                </p>
  </div>
            </div>
        </div>
  
        <div class="card">
    
            <div class="card-block">
            <div class="card-header"><h5><b>ROBOT:  <?php echo $sp[5]; ?> </b></h5></div>
            <div class="card-body">
                <p class="card-text">
                This is the total number of attacks by robot.<br>
                <a href="open.php?name=robot.xlsx">Click here to View the Robot requests</a>
                </p>
                  
               </div>
            </div>
        </div>
    </div>
      
      </div>

      <div class="col-md-6 mw-100">
      <div class="card-deck" style="margin-top:0cm;">
        <div class="card">
            
            <div class="card-block">
            <div class="card-header"><h5><b>SQLI ATTACK: <?php echo $sp[6]; ?> </b></h5></div>
            <div class="card-body">
                <p class="card-text">
                This is the total number of Sqli attacks.
                <br>
                <a href="open.php?name=Newsqli.xlsx">Click here to View the Sqli attacks.</a>
                </p>
  </div>
            </div>
        </div>
  
        <div class="card">
    
            <div class="card-block">
            <div class="card-header"><h5><b>XSS ATTACKS:  <?php echo $sp[7]; ?> </b></h5></div>
            <div class="card-body">
                <p class="card-text">
                This is the total number of Xss attacks.
                <br>
                <a href="open.php?name=Newxss.xlsx">Click here to View the Xss attacks.</a>
                </p>
                  
               </div>
            </div>
        </div>

      </div>
    </div>

  </div>
</div>

<style>
  /* just for displaying correctly without content */
  
  [class*='col'] {
    min-height: 200px;
  }
</style>
</div>
<hr>
<div style="margin-top:1cm;">
<div class="row">
  <div class="col-md-6" style="min-height: 500px;">
  <img src="ddos.png">
  </div>

  <div class="col-md-6" style="margin-top:3cm;">
    <div class="row h-100 flex-column">
      <div class="col-md-6 mw-100">
        <h5><b>The total number of requests : <?php echo $sp[0]; ?></b></h5>
        <br>
                <a href="open.php?name=data.xlsx">Click here to View all the requests.</a>
      <div class="card-deck" style="margin-top:1cm;">
        <div class="card">
            
            <div class="card-block">
            <div class="card-header"><h5><b>BENIGN:  <?php echo $sp[1]; ?> </b></h5></div>
            <div class="card-body">
                <p class="card-text">
                    This is the total benign requests.
                    
                </p>
  </div>
            </div>
        </div>
  
        <div class="card">
    
            <div class="card-block">
            <div class="card-header"><h5><b> DDOS ATTACKS:  <?php echo $sp[2]; ?> </b></h5></div>
            <div class="card-body">
                <p class="card-text">
                This is the total number of DDOS attacks.
                <br>
                <a href="open.php?name=ddos.xlsx">Click here to View the DOS attack requests</a>
                </p>
                  
               </div>
            </div>
        </div>
    </div>
      
      </div>

  

  </div>
</div>
</div>
<button id="user" type="button" class="btn btn-primary"> <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp Log-out</button>&nbsp
<script type="text/javascript">
    document.getElementById("user").onclick = function () {
        location.href = "logout.php";
    };
</script>
</body>
</html>