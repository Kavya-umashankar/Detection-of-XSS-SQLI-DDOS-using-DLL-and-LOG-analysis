<?php 

$command = escapeshellcmd("python D:/Xampp/htdocs/final_codes/log.py");
$output = shell_exec($command);
header("location:admin_dash.php")

?>




