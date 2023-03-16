<?php
$dbUser = getenv('DB_USERNAME');
$dbPass = getenv('DB_PASSWORD');

$dbHost = "localhost";
$dbName = 'store';
$con = new mysqli($dbHost,$dbUser,$dbPass,$dbName);
?>
