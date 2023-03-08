<!DOCTYPE html>
<html>

<head>
    <title>Save Info Page</title>
</head>
<?php include "includes/dbconn.php" ?>

<body>
    <?php
    /* Taking all 4 values from the form data(input)
     Performing insert query execution
     here our table name is college*/
    $sql = $PDO->prepare("INSERT INTO contact (name, email, phone, text)  VALUES(:name, :email, :phone, :text)");
    $sql->bindParam(':name',$name);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':phone',$phone);
    $sql->bindParam(':text',$text);
    $sql->execute();

    header("Location: thanks.php")
    ?>
</body>