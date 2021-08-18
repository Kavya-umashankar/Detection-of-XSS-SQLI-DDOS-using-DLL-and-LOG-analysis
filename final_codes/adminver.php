<?php
session_start();
error_reporting(0);


$con = mysqli_connect("localhost","root","","major_proj");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    // echo  exec("D:/xampp/htdocs/final_project/sample.py" );
    $name = $_POST['aname'];
    $pass = $_POST['apass']; 
 

  // $command2 = escapeshellcmd("python C:/xampp/htdocs/final_project/sqlitest1.py \"$pass\" ");
  // $output2 = shell_exec($command2);
 

 
    $sql = "SELECT * FROM admin WHERE aname = '{$name}' and apass = '{$pass}';";

    $result = mysqli_query($con,$sql);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   // $active = $row['active'];

    $count = mysqli_num_rows($result);
    if($count>=1){
while($rs = $result->fetch_assoc()){
  
$_SESSION['name']=$name;
  
header("location:admin_dash.php");
  echo"success";
  
}
  

} 
else{
?>
    <script>
    alert('invalid login');
    window.location.href='home.php';
    </script>
    <?php
}    
  }
  // header("location:inject.php");

  ?>