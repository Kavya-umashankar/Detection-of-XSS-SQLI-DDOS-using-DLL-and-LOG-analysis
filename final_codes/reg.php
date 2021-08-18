<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
   
    $name=$_POST['uname'];
    $phone=$_POST['phone'];
   $pass=$_POST['upass'];
    $mail=$_POST['mail_id'];
   
    $con = mysqli_connect('localhost','root','','major_proj') or die('Unable To connect');

    $sql = "insert into user (mail_id,uname,upass,phone)values('$mail','$name','$pass','$phone')";

    $stmt = mysqli_prepare($con,$sql);

 
    mysqli_stmt_execute($stmt);
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded please login now ';
        header("location: inject.php"); 
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}