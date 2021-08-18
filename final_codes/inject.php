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
#form{
    padding-top:5cm;
    
}
#image{
    padding-top:2cm;
}
img{
    width:15.5cm;
    height:12.5cm;
}
body{
    background-color:rgb(213, 235, 253);
    font-family:Georgia, 'Times New Roman', Times, serif;
}
.nav-item{
      width:3cm;
  }
  nav{
      background-color:navy !important;
  }
  .nav-link{
      color:white;
  }
  html, body {width: auto!important; overflow-x: hidden!important} 
</style>
<body> 
<!-- <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link3</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
    <div class="row">
        <div id="image" class="offset-1 col-6">
            <img src="https://i.ibb.co/dbct2cP/Socialworldpanel.png">
        </div>
    <div id="form" class="col-4">
        <h2>Welcome Back :)</h2><br>
       <p> To keep connected with us please login with your personal<br>
       information  by email and password </p>

    <form method="get" action="sqlver.php">
    <i class="fa fa-md fa-envelope" aria-hidden="true"></i>   Email :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" id="name" required ><br><br>
    <i class="fa fa-md fa-key" aria-hidden="true"></i>  Password : <input type="password" name="pass" id="pass" required><br><br>
        <button type="submit" class=" btn btn-primary">
        Login 
        </button>
        &nbsp New user? <a href="register.php">Register</a>
    </form>
    </div>
    </div>
</body>
</html>
