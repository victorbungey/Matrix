<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "signup";
$con = mysqli_connect($hostname, $username, $password);

if(!$con)
{
	die('Connection Failed'.mysql_error());
}

mysqli_select_db($con, $database);



?>



