<?php
$server = 'quick-edits.com';
$username = 'quickedits';
$password = '7puzAmQKy2';
$database = 'quickedits_auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
