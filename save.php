<?php include 'includes/dbConn.php';
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$text = $_POST["text"];
mysqli_query($con,"INSERT INTO contact(name,email,phone,text) VALUES ('$name','$email','$phone','$text')");
header("Location: thanks.php")?>