<?php
'';
if($_SERVER['REQUEST_METHOD']=='GET'){
    $type=$_GET['ctype'];
    $date=$_GET['cdate'];
   
    $con = mysqli_connect('localhost','root','','cis') or die('Unable To connect');

    $sql = "insert into case_details (cimage,type,description,cdate) values(?,'$type','$dis','$date')";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s" ,$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfullly UPloaded please login now ';
        header("location: case.php"); 
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}