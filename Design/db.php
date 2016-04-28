<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "web_studio4u";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

 
$select_db = mysqli_select_db($connection, 'web_studio4u');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

  
?>