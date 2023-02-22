<?php
$dbUser = getenv('DB_USERNAME');
$dbPass = getenv('DB_PASSWORD');

$dbHost = gethostname();
$dbName = 'store';
$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser,$dbPass);
?>