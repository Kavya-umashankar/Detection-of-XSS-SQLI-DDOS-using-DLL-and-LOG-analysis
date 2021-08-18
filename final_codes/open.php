<?php

$name=$_GET['name'];

$command = escapeshellcmd("start excel \"$name\" ");
$output = shell_exec($command);

 header("location:admin_dash.php");


?>