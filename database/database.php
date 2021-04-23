<?php
//Create a database connection
$dbhost ="localhost";
$dbuser ="quickedits";
$dbpassword="7puzAmQKy2";
$dbname = "quickedits_auth";

$connection= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$_SESSION['connection'] = $connection;

//Test if connection occured

if(mysqli_connect_errno()){
	die("DB connection failed: " .
		mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
}


if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }

?>
