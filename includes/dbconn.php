<?php 
$dbuser = getenv('DB_USERNAME');
$dbpass = getenv('DB_PASSWORD');

$dbhost = 'localhost';
$dbname = 'store';
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser,$dbpass);
?>