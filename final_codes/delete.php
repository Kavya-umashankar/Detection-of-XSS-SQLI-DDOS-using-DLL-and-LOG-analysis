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
    #social{
        padding-top:2.5cm;
        padding-left:7.5cm;
        color:black;
       font-family:'Courier New', Courier, monospace;;
      font-size:29pt;
    
    }
    #engine{
        padding-left:7.5cm;
        color:black;
       font-family:'Courier New', Courier, monospace;;
      font-size:29pt;
    }
  #sbox{
      width:16cm;
      height:1.3cm;
      border-radius:25px;
      border-color:gray;
      padding-top:2px;
  }
  form{
      padding-top:0.1cm;
  }
  #button{
      border-radius:30px;
      width:2cm;
      height:1cm;
  }

  ::placeholder{
      color:red;
      font-family:Georgia, 'Times New Roman', Times, serif;
      font-size:24pt;
      font-style: italic;
  }
  body{
    
    background-color:rgb(252, 255, 185);
  }
  #image{
      width:22cm;
      height:10.5cm;
  }
  .nav-item{
      width:4cm;
      font-family:Georgia, 'Times New Roman', Times, serif;
  }
  nav{
      background-color:#E6BF00 !important;
  }
  .nav-link{
      color:white;
  }
  html, body {width: auto!important; overflow-x: hidden!important} 
 
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
</nav>
    <div class="row">
        <div id="social" class="offset-3 col-3">
            <b>Social</b>
        </div>
    </div>
    <div class="row">
        <div class="offset-5 col-6">
        <form method="get" action="deleteconn.php">
            <input id="pid" type="text" placeholder="delete" aria-label="delete" name="pid" required>
            <button id="button" class="btn btn-primary btn-sm" type="submit">Delete</button>
        </form>
        </div>
    </div>    
    <div class="row">
        <div id="engine" class="offset-3 col-3">
            <b>Engines</b>
        </div>
    </div>
    <div class="row">
        <div class="col-4" style="margin-left:-3cm;">
            <img id="image" src="transp3.png">
        </div>
    </div>
   
</body>
</html>