<?php
session_start();
include 'database.php';
$id = $_GET['id'];
$_SESSION['id_file']=$id;
$filename = $_GET['filename'];
$path = 'uploads/' . $id . '/' . $filename;
$result = mysqli_query($connection, " UPDATE commisions set Finished=1,completepath='$path'  where id='$id'");

if ($connection->error != null) {
    echo("Error description: " . $connection->error);//Needs error handler
} else {
    echo "Submission submitted";
}

