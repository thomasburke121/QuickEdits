<?php
session_start();
include '../database/database.php';
$email=$_GET['email'];
$itemtype=$_GET['type'];
$userdesc=$_GET['desc'];
$filename=$_GET['filename'];
$id= $_SESSION['user_id'];
$path='uploads/'.$id.'/'.$filename;
$result = mysqli_query($connection,"INSERT INTO `commisions`(`email`,`itemtype`, `userdesc`,`path`,`users_id`,`Finished`) VALUES ('$email','$itemtype','$userdesc','$path','$id','0')");

if($connection -> error!=null){
    echo("Error description: " . $connection -> error);//Needs error handler
}else{
   echo "Submission submitted";
}

