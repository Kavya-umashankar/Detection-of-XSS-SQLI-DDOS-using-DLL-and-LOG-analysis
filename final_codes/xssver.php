
<?php
error_reporting(0);
session_start();
  if($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form 
    
    $name =$_SESSION['mail'];
    $data=$_GET['name'];
    $command = escapeshellcmd("python D:/xampp/htdocs/final_codes/1xss.py \"$data\" ");
    $output = shell_exec($command);
if ($output==0)
{
    $con = mysqli_connect('localhost','root','','major_proj') or die('Unable To connect');

    $sql = "insert into post (mail_id,data) values('$name','$data')";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){

        $msg = 'Image Successfullly UPloaded please login now ';
        header("location:post_disp.php"); 
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
else{
    ?> <script>
    alert('XSS alert..!! Please use valid data ,Else you will be blocked..!!');
    window.location.href='insertpage.php';
    </script>
    <?php
}
    // $command = escapeshellcmd('C:/final project/XSStest.py');
    // $output = shell_exec($command);
    // echo $output;
}
  ?>


