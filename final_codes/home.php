<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    height:14cm;
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

    <div class="row">
        <div id="image" class="offset-1 col-6">
            <img src="img1.png">
        </div>
    <div class="col-4" style="margin-top:7cm;">
        <h2>Welcome !!</h2>
       <p> Choose who you are and sign-in to your portal</p>
      
       <button id="user" type="button" class="btn btn-primary btn-lg"> <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp USER</button>&nbsp
    
       <button id="loginButton" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter" > <i class="fa fa-lock" aria-hidden="true"></i>&nbsp ADMIN</button>
       <script type="text/javascript">
    document.getElementById("user").onclick = function () {
        location.href = "inject.php";
    };
</script>
    </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form action="adminver.php" method="POST">
                        <div class="form-row" >
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="aname">Email address</label>
                                    <input type="email" class="form-control form-control-sm mr-1" name="aname" placeholder="Enter email" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="apass">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" name="apass" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                        </div>
                    </form>
                </div>
            </div>

        </div>

</div>

    <div id="loginModal" class="modal fade" role="dialog">
        
    </div>

</body>
</html>
