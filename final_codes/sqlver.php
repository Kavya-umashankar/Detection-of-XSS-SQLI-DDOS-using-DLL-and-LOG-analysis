<?php
session_start();
error_reporting(0);


$con = mysqli_connect("localhost","root","","major_proj");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form 
    
    $name =$_GET['name'];
   
    // echo  exec("D:/xampp/htdocs/final_project/sample.py" );
    $name = $_GET['name'];
    $pass = $_GET['pass']; 
   


   

  $command = escapeshellcmd("python D:/Xampp/htdocs/final_codes/run.py \"$name\" \"$pass\"  ");
  $output = shell_exec($command);
  // $command2 = escapeshellcmd("python C:/xampp/htdocs/final_project/sqlitest1.py \"$pass\" ");
  // $output2 = shell_exec($command2);
  $ip=$_SERVER['HTTP_HOST'];

  if ($output==1 )
  {

    ?>
    
     <script>
    alert('Sql Injection alert..!! Please use valid Credentials ,Else you will be blocked..!!');
    window.location.href='inject.php';
    </script>
    <?php
  }
  else{
    $sql = "SELECT * FROM user WHERE mail_id = '{$name}' and upass = '{$pass}';";

    $result = mysqli_query($con,$sql);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   // $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    if($count>=1){
while($rs = $result->fetch_assoc()){
  
$_SESSION['mail']=$name;
  
header("location:welcome.php");
  echo "login successful";
  
}
  }

else{
 
  ?> <script>
  alert('Login Failed.!');
  window.location.href='inject.php';
  </script>
  <?php
}
}     
  }
  // header("location:inject.php");

  ?>