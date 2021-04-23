<?php
session_start();
$id= $_SESSION['user_id'];
$path='uploads/'.$id.'/';

if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], $path . $_FILES['file']['name']);
    }

?>
