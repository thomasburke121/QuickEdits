<?php

$server = 'quick-edits.com';
$username = 'quickedits';
$password = '7puzAmQKy2';
$database = 'quickedits_auth';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
//This exists as i couldnt get login to go through my orginal connection and wasnt getting feed back for this. Will try fix if have time.
