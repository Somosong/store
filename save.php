<!DOCTYPE html>
<html>
 
<head>
    <title>Save Info Page</title>
</head>
 <?php include "dbconn.php" ?>
<body>
     <?php
    // Check connection
    if($dbConnection === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
         
    // Taking all 4 values from the form data(input)
    $name =  $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone =  $_REQUEST['phone'];
    $text = $_REQUEST['text'];
        ?>
</body>
   