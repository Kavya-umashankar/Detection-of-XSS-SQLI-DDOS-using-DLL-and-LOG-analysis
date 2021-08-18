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
     #ibox{
      width:13cm;
      height:1.3cm;
      border-radius:25px;
      border-color:gray;
      padding-top:2px;
  }
  
  #button{
      border-radius:30px;
      width:2cm;
      height:1cm;
  }
  ::placeholder{
      color:black;
      font-family:Georgia, 'Times New Roman', Times, serif;
      font-size:15pt;
      font-style: italic;
  }
  body{
    font-family:Georgia, 'Times New Roman', Times, serif;
    background-color:rgb(252, 232, 222);
    
  }
  #form{
      margin-top:6.5cm;
      
  }
  #image{
      margin-top:1cm;
        height:17cm;
      width:18cm;
  }
  .nav-item{
      width:4cm;
  }
  nav{
      background-color:purple !important;
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
      </ul>
    </div>
  </div>
</nav>
    <div class="row">
        <div id="form" class="offset-1 col-5">
            <h2>Post/Tweet something</h2>
            <p>If you are passionate about writing and sharing, we help you<br>
            build a community of active readers and commenters</p>
        <form method="get" action="xssver.php">
        <input id="ibox" type="text" name="name" id="name" placeholder="post/tweet">
        <button id="button" class="btn btn-primary btn-sm" type="submit">submit</button>
        </form>
    </form>
        </div>
        <div class="col-6">
            <img id="image" src="new3.png">
        </div>    
    </div> 
</body>
</html>