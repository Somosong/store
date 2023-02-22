<!DOCTYPE html>
<html>

<head>
    <title>Save Info Page</title>
</head>
<?php include "dbconn.php" ?>

<body>
    <?php
    // Check connection
    if ($dbConnection === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 4 values from the form data(input)
    $name =  $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone =  $_REQUEST['phone'];
    $text = $_REQUEST['text'];
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO college  VALUES ('$name',
            '$phone','$text','$email')";

    if (mysqli_query($dbConnection, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$name\n $phone\n "
            . "$text\n $email");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

    header("Location: thanks.php")
    ?>
</body>